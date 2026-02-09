<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Pengumuman;
use App\Models\PostinganBerita;
use App\Models\PublikasiDosen;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita()
    {
        $dataBerita = PostinganBerita::all();
        $latestBerita8 = PostinganBerita::whereNotNull('image')
            ->whereNull('link')
            ->orderBy('created_at', 'desc')
            ->paginate(8);
        return view('frontend.pages.berita.berita', compact('dataBerita', 'latestBerita8'));
    }

    public function berita_detail($id)
    {
        $dataBerita = PostinganBerita::find($id);
        $randomBerita = PostinganBerita::inRandomOrder()->limit(3)->get();
        $berita8 = PostinganBerita::latest()->limit(8)->get();
        return view('frontend.pages.berita.beritadetail', compact('dataBerita', 'randomBerita', 'berita8'));
    }

    public function agenda()
    {
        $dataAgenda = Agenda::latest()->paginate(8);
        $dataPengumuman = Pengumuman::latest()->get();
        return view('frontend.pages.berita.agenda', compact('dataAgenda', 'dataPengumuman'));
    }

    public function agenda_detail($id)
    {
        $dataAgenda = Agenda::find($id);
        $randomAgenda = Agenda::inRandomOrder()->limit(3)->get();
        $agenda8 = Agenda::latest()->limit(8)->get();
        return view('frontend.pages.berita.agendadetail', compact('dataAgenda', 'randomAgenda', 'agenda8'));
    }

    public function publikasi_dosen()
    {
        $dataPublikasi = PublikasiDosen::latest()->paginate(8);
        return view('frontend.pages.berita.publikasidosen', compact('dataPublikasi'));
    }

    public function publikasi_detail($id)
    {
        $dataPublikasi = PublikasiDosen::find($id);
        $randomPublikasi = PublikasiDosen::inRandomOrder()->limit(3)->get();
        $publikasi8 = PublikasiDosen::latest()->limit(8)->get();
        return view('frontend.pages.berita.publikasidosendetail', compact('dataPublikasi', 'randomPublikasi', 'publikasi8'));
    }
}
