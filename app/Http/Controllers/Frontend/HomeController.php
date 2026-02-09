<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Fakultas;
use App\Models\GaleriIlkom;
use App\Models\Pengumuman;
use App\Models\PostinganBerita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dataFakultas = Fakultas::first();
        $dataGaleri = GaleriIlkom::all();
        $dataBerita = PostinganBerita::latest()->get();
        $dataPengumuman = Pengumuman::latest()->limit(4)->get();
        $dataAgenda = Agenda::latest()->limit(1)->first();
        return view('frontend.pages.index', compact('dataFakultas', 'dataGaleri', 'dataBerita', 'dataPengumuman', 'dataAgenda'));
    }
}
