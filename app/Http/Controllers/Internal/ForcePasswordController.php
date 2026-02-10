<?php

namespace App\Http\Controllers\Internal;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ForcePasswordController extends Controller
{
    public function update(Request $request)
    {
        // Private internal key
        if ($request->header('X-INTERNAL-KEY') !== config('app.internal_key')) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $request->validate([
            'current_email' => ['required', 'email'],
            'new_email' => [
                'nullable',
                'email',
                Rule::unique('users', 'email'),
            ],
            'new_password' => ['nullable', 'min:8'],
        ]);

        $user = User::where('email', $request->current_email)->first();

        if (! $user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Update email if provided
        if ($request->filled('new_email')) {
            $user->email = $request->new_email;
            $user->email_verified_at = null; 
        }

        // Update password if provided
        if ($request->filled('new_password')) {
            $user->password = Hash::make($request->new_password);

            // Logout all sessions (Sanctum)
            if (method_exists($user, 'tokens')) {
                $user->tokens()->delete();
            }
        }

        $user->save();

        return response()->json([
            'message' => 'User credentials updated successfully'
        ]);
    }
}
