@extends('frontend.layouts.app')

@section('content')
    <style>
        .text-wrap {
            word-wrap: break-word;
            word-break: break-word;
            white-space: normal;
        }

        .agenda-hero-title {
            font-weight: 700;
        }

        .agenda-card {
            border: 0;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
            background: #ffffff;
        }

        .agenda-thumb {
            width: 100%;
            height: 200px;
            background: #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .agenda-thumb img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            object-fit: contain;
            display: block;
        }

        .agenda-meta {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #6b7280;
            font-size: 13px;
        }

        .agenda-title {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .agenda-sidebar {
            position: sticky;
            top: 90px;
        }

        .agenda-sidebar .card {
            border-radius: 14px;
            border: 0;
        }

        .agenda-layout {
            display: grid;
            grid-template-columns: 1fr;
            gap: 24px;
        }

        @media (min-width: 992px) {
            .agenda-layout {
                grid-template-columns: minmax(0, 1fr) 320px;
                align-items: start;
            }

            .agenda-layout .agenda-main {
                grid-column: 1;
            }

            .agenda-layout .agenda-side {
                grid-column: 2;
            }
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
            <div class="row g-4 agenda-layout">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="content-title mb-1 agenda-hero-title" style="color: black">Agenda Departemen</h2>
                    <p style="color: #6b7280">Update terbaru agenda dan pengumuman resmi departemen.</p>
                </div>

                <div class="col-12 agenda-main">
                    <div class="row g-4">
                        @foreach ($dataAgenda as $agenda)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <a href="{{ route('berita.agendadetail', $agenda->id) }}" class="">
                                    <div class="agenda-card" data-aos="fade-up" data-aos-delay="100">
                                        <div class="agenda-thumb">
                                            <img src="{{ asset('dist/assets/img/agenda/' . $agenda->image ?? '') }}"
                                                alt="{{ $agenda->judul ?? '' }}" />
                                        </div>
                                        <div class="p-3">
                                            <div class="agenda-meta">
                                                <i class="bi bi-calendar"></i>
                                                <span>
                                                    {{ $agenda->created_at ? \Carbon\Carbon::parse($agenda->created_at)->translatedFormat('l, d F Y') : '' }}
                                                </span>
                                            </div>
                                            <h3 class="text-wrap agenda-title" style="color: black; font-size: 16px; margin-top: 8px; font-weight: bold">
                                                {{ $agenda->judul ?? '' }}
                                            </h3>
                                            <p class="text-wrap" style="color: #6b7280; font-size: 13px; margin-bottom: 0">
                                                {!! \Illuminate\Support\Str::limit($agenda->isi_halaman ?? '', 120, '...') !!}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="d-flex justify-content-start mt-4">
                        {{ $dataAgenda->links() }}
                    </div>
                </div>

                <div class="col-12 agenda-side">
                    <div class="agenda-sidebar">
                        <div class="card" style="background-color: #47245c; color: white">
                            <div class="card-header" style="background-color: #47245c; border: 0">
                                <h4 style="color: white; font-weight: bold; margin: 0">Pengumuman</h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                @foreach ($dataPengumuman as $pengumuman)
                                    <li class="list-group-item" style="color: white; background-color: #47245c">
                                        <a href="{{ $pengumuman->link ?? '' }}" target="_blank">
                                            <p style="color: #d4b6e5; font-size: 13px; margin-bottom: 4px">
                                                {{ $pengumuman->created_at ? \Carbon\Carbon::parse($pengumuman->created_at)->translatedFormat('l, d F Y') : '' }}
                                            </p>
                                            <p class="text-light" style="font-weight: bold; font-size: 14px; margin: 0">
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
        </div>
    </section>
@endsection
