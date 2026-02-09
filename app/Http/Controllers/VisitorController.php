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
}
