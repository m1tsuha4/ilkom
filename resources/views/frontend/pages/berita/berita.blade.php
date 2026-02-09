@extends('frontend.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(/dist_frontend/assets/img/page-title-bg.webp)">
        <div class="container position-relative">
            <h1>Berita</h1>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- About 3 Section -->
    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <div class="row">
                @php
                    $filteredBerita = $dataBerita->filter(function ($item) {
                        return !empty($item->image) && empty($item->link);
                    });

                    $filteredVideo = $dataBerita->filter(function ($item) {
                        return !empty($item->link) && empty($item->image);
                    });

                    $latestBerita = $filteredBerita->sortByDesc('created_at')->first();
                    $latestBerita4 = $filteredBerita->sortByDesc('created_at')->take(4);

                    $latestVideo = $filteredVideo->sortByDesc('created_at')->take(8);
                @endphp
                <div class="col-lg-6 col-md-12">
                    <img src="{{ isset($latestBerita->image) ? asset('dist/assets/img/postinganberita/' . $latestBerita->image) : '' }}"
                        alt="Image" class="img-fluid" />
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="row gy-5">
                        @foreach ($latestBerita4 as $berita4)
                            <div class="col-lg-6 col-md-6">
                                <a href="{{ route('berita.beritadetail', $berita4->id) }}" class="">
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <div class="overflow-hidden" style="max-height: 150px">
                                            <img src="{{ isset($berita4->image) ? asset('dist/assets/img/postinganberita/' . $berita4->image) : '' }}"
                                                class="img-fluid" alt="{{ $berita4->judul ?? '' }}"
                                                style="width: 100%; object-fit: cover" />
                                        </div>
                                        <div style="margin-top: 10px">
                                            <div style="display: flex; align-items: center; color: gray; font-size: 14px">
                                                <i class="bi bi-calendar"></i>
                                                <span style="margin-left: 5px">
                                                    {{ $berita4->created_at ? \Carbon\Carbon::parse($berita4->created_at)->translatedFormat('l, d F Y') : '' }}
                                                </span>
                                            </div>
                                            <h3 style="color: black; font-size: 16px; margin-top: 5px; font-weight: bold">
                                                {{ $berita4->judul ?? '' }}
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About 3 Section -->

    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <div class="row">
                <div class="container" data-aos="fade-up">
                    <h2 class="content-title mb-4" style="color: black; font-weight: bold">Berita Terkini</h2>
                </div>
                <div class="col-lg-8 col-md-12 mb-4">
                    <div class="row gy-5">
                        @foreach ($latestBerita8 as $berita8)
                            <div class="col-lg-12 col-md-6">
                                <a href="{{ route('berita.beritadetail', $berita8->id) }}" class="">
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <div class="overflow-hidden" style="max-height: 500px">
                                            <img src="{{ isset($berita8->image) ? asset('dist/assets/img/postinganberita/' . $berita8->image) : '' }}"
                                                class="img-fluid" alt="{{ $berita8->judul ?? '' }}"
                                                style="width: 100%; object-fit: cover" />
                                        </div>
                                        <div style="margin-top: 10px">
                                            <div style="display: flex; align-items: center; color: gray; font-size: 14px">
                                                <i class="bi bi-calendar"></i>
                                                <span
                                                    style="margin-left: 5px">{{ $berita8->created_at ? \Carbon\Carbon::parse($berita8->created_at)->translatedFormat('l, d F Y') : '' }}</span>
                                            </div>
                                            <h3 style="color: black; font-size: 20px; margin-top: 5px; font-weight: bold">
                                                {{ $berita8->judul ?? '' }}
                                            </h3>
                                            <p>
                                                {!! \Illuminate\Support\Str::limit($berita8->isi_halaman ?? '', 200, '...') !!}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        <div class="d-flex justify-content-start">
                            {{ $latestBerita8->links() }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    @foreach ($latestVideo as $video)
                        <a href="{{ route('berita.beritadetail', $video->id) }}" class="">
                            <div class="d-flex align-items-start mb-4">
                                <div class="col-5">
                                    <x-embed url="{{ $video->link ?? '' }}" aspect-ratio="16:9" />
                                </div>
                                <div class="ms-3">
                                    <p style="font-size: 14px; color: #b92383; margin: 0">{{ $video->judul ?? '' }}
                                    </p>
                                    <p style="font-size: 12px; color: #888888; margin: 0">
                                        {{ $video && $video->created_at ? \Carbon\Carbon::parse($video->created_at)->translatedFormat('d F Y') : '' }}
                                    </p>
                                    <h5 class="text-wrap" style="font-size: 14px; color: black; margin: 5px 0">
                                        {!! \Illuminate\Support\Str::limit($video->isi_halaman ?? '', 30, '...') !!}</h5>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
