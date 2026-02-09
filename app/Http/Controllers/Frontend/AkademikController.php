<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AkreditasiDepartemen;
use App\Models\Jurnal;
use App\Models\KalenderAkademik;
use App\Models\KonsentrasiPenjurusan;
use App\Models\Kurikulum;
use App\Models\ProgramSarjana;
use App\Models\SinopsisMatkul;
use App\Models\Sop;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function kurikulum()
    {
        $data = Kurikulum::latest()->get();
        return view('frontend.pages.akademik.kurikulum', compact('data'));
    }
    public function kurikulum_detail($id)
    {
        $item = Kurikulum::find($id);
        return view('frontend.pages.akademik.kurikulum-detail', compact('item'));
    }
    public function akreditasi()
    {
        $data = AkreditasiDepartemen::latest()->get();
        return view('frontend.pages.akademik.akreditasi', compact('data'));
    }
    public function akreditasi_detail($id)
    {
        $item = AkreditasiDepartemen::find($id);
        return view('frontend.pages.akademik.akreditasi-detail', compact('item'));
    }
    public function sop()
    {
        $data = Sop::latest()->get();
        return view('frontend.pages.akademik.sop', compact('data'));
    }

    public function sop_detail($id)
    {
        $item = Sop::find($id);
        return view('frontend.pages.akademik.sop-detail', compact('item'));
    }

    public function sinopsis_matkul()
    {
        $data = SinopsisMatkul::latest()->get();
        return view('frontend.pages.akademik.sinopsismatkul', compact('data'));
    }
    public function kalender_akademik()
    {
        $data = KalenderAkademik::latest()->get();
        return view('frontend.pages.akademik.kalenderakademik', compact('data'));
    }
    public function konsentrasi_penjurusan()
    {
        $data = KonsentrasiPenjurusan::latest()->get();
        return view('frontend.pages.akademik.konsentrasipenjurusan', compact('data'));
    }

    public function program_sarjana()
    {
        $data = ProgramSarjana::latest()->get();
        return view('frontend.pages.akademik.programsarjana', compact('data'));
    }
    public function program_sarjana_detail($id)
    {
        $item = ProgramSarjana::find($id);
        return view('frontend.pages.akademik.programsarjanadetail', compact('item'));
    }

    public function jurnal()
    {
        $data = Jurnal::latest()->get();
        return view('frontend.pages.akademik.jurnal', compact('data'));
    }
    public function jurnal_detail($id)
    {
        $item = Jurnal::find($id);
        return view('frontend.pages.akademik.jurnal-detail', compact('item'));
    }
}
