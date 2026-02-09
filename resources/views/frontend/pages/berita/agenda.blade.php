@extends('frontend.layouts.app')

@section('content')
    <style>
        .text-wrap {
            word-wrap: break-word;
            word-break: break-word;
            white-space: normal;
        }
    </style>
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(/dist_frontend/assets/img/page-title-bg.webp)">
        <div class="container position-relative">
            <h1>Agenda & Pengumuman</h1>
        </div>
    </div>
    <!-- End Page Title -->

    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <div class="row">
                <div class="container" data-aos="fade-up">
                    <h2 class="content-title mb-4" style="color: black; font-weight: bold">Agenda Departemen</h2>
                </div>
                <div class="col-lg-8 col-md-12 mb-4">
                    <div class="row gy-5">
                        @foreach ($dataAgenda as $agenda)
                            <div class="col-lg-12 col-md-6">
                                <a href="{{ route('berita.agendadetail', $agenda->id) }}" class="">
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <div>
                                            <img src="{{ asset('dist/assets/img/agenda/' . $agenda->image ?? '') }}"
                                                style="width: 100%" alt="" />
                                        </div>
                                        <div style="margin-top: 10px">
                                            <div style="display: flex; align-items: center; color: gray; font-size: 14px">
                                                <i class="bi bi-calendar"></i>
                                                <span
                                                    style="margin-left: 5px">{{ $agenda->created_at ? \Carbon\Carbon::parse($agenda->created_at)->translatedFormat('l, d F Y') : '' }}</span>
                                            </div>
                                            <h3 class="text-wrap"
                                                style="color: black; font-size: 20px; margin-top: 5px; font-weight: bold">
                                                {{ $agenda->judul ?? '' }}
                                            </h3>
                                            <p class="text-wrap">
                                                {!! \Illuminate\Support\Str::limit($agenda->isi_halaman ?? '', 200, '...') !!}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        <div class="d-flex justify-content-start">
                            {{ $dataAgenda->links() }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card" style="width: 90%; background-color: #47245c; color: white">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"
                                style="color: white; background-color: #47245c; font-weight: bold; font-size: 24px">
                                Pengumuman</li>
                            @foreach ($dataPengumuman as $pengumuman)
                                <li class="list-group-item" style="color: white; background-color: #47245c">
                                    <a href="{{ $pengumuman->link ?? '' }}" target="_blank">
                                        <p style="color: #d4b6e5; font-size: 16px">
                                            {{ $pengumuman->created_at ? \Carbon\Carbon::parse($pengumuman->created_at)->translatedFormat('l, d F Y') : '' }}
                                        </p>
                                        <p class="text-light" style="font-weight: bold; font-size: 16px">
                                            {{ $pengumuman->nama ?? '' }}
                                        </p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
