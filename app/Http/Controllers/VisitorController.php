<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    public function index()
    {
        $visitors = DB::table('visitors')
            ->select('country', 'country_code', DB::raw('count(*) as total'))
            ->groupBy('country', 'country_code')
            ->orderByDesc('total')
            ->get();


        return view('admin.pages.visitors.index', compact('visitors'));
    }

    public function destroy()
    {
        DB::table('visitors')->truncate(); // Menghapus semua data dari tabel
        return redirect()->route('visitors.index')->with('success', 'Semua data pengunjung berhasil dihapus.');
    }

    public function track(Request $request)
    {
        $payload = $request->validate([
            'ipAddress' => 'nullable|string',
            'countryName' => 'nullable|string',
            'countryCode' => 'nullable|string',
            'city' => 'nullable|string',
        ]);

        $ipAddress = $payload['ipAddress'] ?? $request->ip();
        if (!$ipAddress) {
            return response()->json(['message' => 'Missing IP address.'], 422);
        }

        $countryCode = $payload['countryCode'] ?? null;
        $normalizedCountryCode = $countryCode ? strtolower($countryCode) : null;

        DB::table('visitors')->updateOrInsert(
            ['ip' => $ipAddress],
            [
                'country' => $payload['countryName'] ?? null,
                'country_code' => $normalizedCountryCode,
                'city' => $payload['city'] ?? null,
                'updated_at' => now(),
                'created_at' => DB::raw('IFNULL(created_at, NOW())'),
            ]
        );

        return response()->noContent();
    }
}
