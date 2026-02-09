<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\SubKemahasiswaan;
use Illuminate\Http\Request;

class KemahasiswaanController extends Controller
{
    public function alumni()
    {
        $dataAlumni = Alumni::latest()->get();
        return view('frontend.pages.kemahasiswaan.alumni', compact('dataAlumni'));
    }

    public function kemahasiswaan()
    {
        $dataKemahasiswaan = SubKemahasiswaan::latest()->get();
        return view('frontend.pages.kemahasiswaan.kemahasiswaan', compact('dataKemahasiswaan'));
    }

    public function kemahasiswaan_detail($id)
    {
        $item = SubKemahasiswaan::find($id);
        return view('frontend.pages.kemahasiswaan.kemahasiswaandetail', compact('item'));
    }
}
