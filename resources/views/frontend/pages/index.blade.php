@extends('frontend.layouts.app')

@section('content')
    <style>
        .text-wrap {
            word-wrap: break-word;
            word-break: break-word;
            white-space: normal;
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
            /* Rasio 16:9 */
            overflow: hidden;
            background-color: black;
            /* Opsional, untuk memastikan latar belakang hitam */
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div id="hero-carousel" class="carousel slide carousel-fade">
            <div class="carousel-item active">
                <div class="video-container">
                    <iframe
                        src="https://www.youtube.com/embed/4je1rtfZ8Qg?si=gYbWCsTHsbbCqJnE&autoplay=1&mute=1&loop=1&playlist=4je1rtfZ8Qg&controls=0&modestbranding=1&rel=0"
                        title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="carousel-container justify-content-center text-center">
                    <img src="{{ asset('dist_frontend/assets/img/unand.png') }}" class="logo-unand"
                        style="width: 100px; height: 100px; display: block; margin: 0 auto" alt="Image" />
                    <h2>Departemen Ilmu Komunikasi</h2>
                    <h3>Universitas Andalas</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
        <div class="content">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item" style="display: flex; align-items: center; gap: 15px">
                            <div class="service-item-icon" style="color: white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                    class="bi bi-mortarboard" viewBox="0 0 16 16">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                                </svg>
                            </div>
                            <div class="service-item-content">
                                <h2 style="color: white"><strong>{{ $dataFakultas->jml_mahasiswa ?? 0 }}+</strong></h2>
                                <p style="color: white">Mahasiswa Aktif</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item" style="display: flex; align-items: center; gap: 15px">
                            <div class="service-item-icon" style="color: white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                    class="bi bi-mortarboard" viewBox="0 0 16 16">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                                </svg>
                            </div>
                            <div class="service-item-content">
                                <h2 style="color: white"><strong>{{ $dataFakultas->jml_dosen ?? 0 }}+</strong></h2>
                                <p style="color: white">Dosen</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item" style="display: flex; align-items: center; gap: 15px">
                            <div class="service-item-icon" style="color: white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                    class="bi bi-mortarboard" viewBox="0 0 16 16">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                                </svg>
                            </div>
                            <div class="service-item-content">
                                <h2 style="color: white"><strong>{{ $dataFakultas->jml_publikasi ?? 0 }}+</strong></h2>
                                <p style="color: white">Jumlah Publikasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item" style="display: flex; align-items: center; gap: 15px">
                            <div class="service-item-icon" style="color: white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                    class="bi bi-mortarboard" viewBox="0 0 16 16">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                                </svg>
                            </div>
                            <div class="service-item-content">
                                <h2 style="color: white"><strong>{{ $dataFakultas->jml_alumni ?? 0 }}+</strong></h2>
                                <p style="color: white">Alumni</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Services Section -->

    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section">
        <div class="container">
            <div class="row gy-4 justify-content-between align-items-center">
                <div class="col-lg-5 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <p style="color: #b92383">Communication Science</p>
                    <h2 class="content-title mb-4" style="color: black; font-weight: bold">Visi & Strategi</h2>
                    <p class="mb-4" style="color: #817e7e; font-size: 16px">
                        Menjadikan Jurusan Ilmu Komunikasi FISIP Unand sebagai basis pengembangan ilmu dan
                        praktik enterpreneur komunikasi  khususnya di bidang  Jurnalistik, Televisi dan Film, Public
                        Relations, dan Manajemen Komunikasi di Indonesia
                        pada tahun 2030. Sasaran program studi dan strategi pencapaian visi dan misi program studi
                        dilakukan dalam 3 (tiga) periode pencapaian yaitu 2015-2020, 2020-2025, 2025-2030, dimana
                        pencapaian setiap periodenya memiliki
                        ukuran capaian keberhasilan yang ditargetkan.
                    </p>
                </div>
                <div class="col-lg-6 order-lg-1 position-relative" data-aos="zoom-out">
                    <img src="{{ asset('dist_frontend/assets/img/img_sq_1.jpg') }}" alt="Image" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- /About 3 Section -->

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="content">
            <div class="container">
                <div class="row gy-4 justify-content-between align-items-center">
                    <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <p style="color: #b92383">Kepala Departemen</p>
                        <h2 class="content-title mb-4" style="color: black; font-weight: bold">Sambutan</h2>
                        <p class="mb-4" style="color: #817e7e; font-size: 16px">
                            Di Departemen Ilmu Komunikasi, kami percaya bahwa setiap mahasiswa adalah benih potensi yang siap tumbuh menjadi pribadi yang memberi pengaruh. Komunikasi bukan sekadar menyampaikan pesan, melainkan seni membangun makna, menjembatani perbedaan, dan menghadirkan perubahan. Karena itu, kami berkomitmen melahirkan lulusan yang berani bermimpi, kritis melihat realitas, dan kreatif merajut masa depan. Bersama, mari kita jadikan ilmu komunikasi sebagai kekuatan untuk berkarya, berinovasi, dan menginspirasi dunia.
                        </p>
                    </div>
                    <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
                        <img src="{{ asset('dist_frontend/assets/img/kadep.png') }}" alt="Image"
                            class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Section -->

    <!-- Recent Posts Section -->
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

                    $latestBerita = $filteredBerita->sortByDesc('created_at')->take(6);
                    $latestVideo = $filteredVideo->sortByDesc('created_at')->take(4);
                @endphp
                <!-- Kolom Blog -->
                <div class="col-lg-8 col-md-12 mb-4">
                    <div class="container" data-aos="fade-up">
                        <p style="color: #b92383">Cerita Departemen Ilmu Komunikasi</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="content-title mb-4" style="color: black; font-weight: bold">Berita dan Peristiwa
                            </h2>
                            <a href="{{ route('berita.berita') }}" class=""><u>Lihat Semua</u></a>
                        </div>
                    </div>
                    <div class="row gy-5">
                        @foreach ($latestBerita as $berita)
                            @if ($berita->image)
                                <div class="col-lg-4 col-md-6">
                                    <a href="{{ route('berita.beritadetail', $berita->id) }}" class="">
                                        <div data-aos="fade-up" data-aos-delay="100">
                                            <div class="overflow-hidden" style="max-height: 150px">
                                                <img src="{{ isset($berita->image) ? asset('dist/assets/img/postinganberita/' . $berita->image) : asset('dist_frontend/assets/img/img_sq_1.jpg') }}"
                                                    class="img-fluid" alt="{{ $berita->judul ?? '' }}"
                                                    style="width: 100%; object-fit: cover" />
                                            </div>
                                            <div style="margin-top: 10px">
                                                <div
                                                    style="display: flex; align-items: center; color: gray; font-size: 14px">
                                                    <i class="bi bi-calendar"></i>
                                                    <span style="margin-left: 5px">
                                                        {{ $berita && $berita->created_at ? \Carbon\Carbon::parse($berita->created_at)->translatedFormat('l, d F Y') : '' }}
                                                    </span>
                                                </div>
                                                <h3 class="text-wrap"
                                                    style="color: black; font-size: 16px; margin-top: 5px; font-weight: bold">
                                                    {{ $berita->judul ?? '' }}</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Kolom Video -->
                <div class="col-lg-4 col-md-12">
                    <div class="container" data-aos="fade-up">
                        <p style="color: #b92383">Karya-karya Ilmu Komunikasi</p>
                        <h2 class="content-title mb-4" style="color: black; font-weight: bold">Video Kami</h2>
                    </div>
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
                                        {{ \Illuminate\Support\Str::limit($video->isi_halaman ?? '', 30, '...') }}</h5>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- /Recent Posts Section -->

    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section">
        <div class="container">
            <div class="row gy-4 justify-content-between align-items-center">
                <div class="col-lg-7 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <p style="color: #b92383">Kegiatan Kami</p>
                    <h2 class="content-title mb-4" style="color: black; font-weight: bold">Agenda Departemen</h2>
                    <div class="col-xl-12 col-md-6">
                        <a href="{{ route('berita.agendadetail', $dataAgenda->id ?? '') }}"
                            class="readmore stretched-link">
                            <div data-aos="fade-up" data-aos-delay="100">
                                <div class="overflow-hidden" style="max-height: 400px">
                                    <img src="{{ isset($dataAgenda->image) ? asset('dist/assets/img/agenda/' . $dataAgenda->image) : asset('dist_frontend/assets/img/img_sq_1.jpg') }}"
                                        class="img-fluid img-thumbnail" alt="{{ $berita->judul ?? '' }}"
                                        style="width: 100%; object-fit: cover" />
                                </div>
                                <div style="margin-top: 10px">
                                    <div style="display: flex; align-items: center; color: gray; font-size: 14px">
                                        <i class="bi bi-calendar"></i>
                                        <span style="margin-left: 5px">
                                            {{ $dataAgenda && $dataAgenda->created_at ? \Carbon\Carbon::parse($dataAgenda->created_at)->translatedFormat('l, d F Y') : '' }}
                                        </span>
                                    </div>
                                    <h3 class="text-wrap"
                                        style="color: black; font-size: 16px; margin-top: 5px; font-weight: bold">
                                        {{ $dataAgenda->judul ?? '' }}
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 order-lg-1" data-aos="zoom-out">
                    <div class="col-xl-12 col-md-6">
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
                        <a href="{{ route('berita.agenda') }}" class="btn mt-4 fw-bold"
                            style=" border: 2px solid #47245c; color: #47245c; text-decoration: none; display: inline-flex; align-items: center; padding: 10px 15px; transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;"
                            onmouseover="this.style.backgroundColor='#47245c'; this.style.color='#fff';"
                            onmouseout="this.style.backgroundColor=''; this.style.color='#47245c';">
                            Lebih Lengkap
                            <img src="{{ asset('dist_frontend/assets/img/Arrow 1.svg') }}" alt=""
                                style="margin-left: 10px; transition: transform 0.3s ease;"
                                onmouseover="this.style.transform='translateX(5px)'"
                                onmouseout="this.style.transform='translateX(0)'">
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About 3 Section -->

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2">
        <!-- Section Title -->
        <div class="container" style="justify-content: left; text-align: left !important" data-aos="fade-up">
            <p style="color: #b92383">Foto-Foto Departemen</p>
            <h2 class="content-title mb-4" style="color: black; font-weight: bold">Galeri Komunikasi</h2>
        </div>
        <!-- End Section Title -->

        <div class="services-carousel-wrap">
            <div class="container">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                            {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "navigation": {
                                "nextEl": ".js-custom-next",
                                "prevEl": ".js-custom-prev"
                            },
                            "breakpoints": {
                                "320": {
                                "slidesPerView": 1,
                                "spaceBetween": 40
                                },
                                "1200": {
                                "slidesPerView": 3,
                                "spaceBetween": 40
                                }
                            }
                            }
                        </script>
                    <button class="navigation-prev js-custom-prev">
                        <i class="bi bi-arrow-left-short"></i>
                    </button>
                    <button class="navigation-next js-custom-next">
                        <i class="bi bi-arrow-right-short"></i>
                    </button>
                    <div class="swiper-wrapper">
                        @foreach ($dataGaleri as $galeri)
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <div class="service-item-contents">
                                        <a href="#">
                                            <span
                                                class="service-item-category">{{ $galeri->created_at ? \Carbon\Carbon::parse($galeri->created_at)->translatedFormat('d F Y') : '' }}</span>
                                            <h2 class="service-item-title">{{ $galeri->nama_kegiatan ?? '' }}</h2>
                                        </a>
                                    </div>
                                    <div style="max-height: 250px; overflow: hidden; border-radius: 0.9rem;">
                                        <img src="{{ asset('dist/assets/img/galeriilkom/' . $galeri->image ?? '') }}"
                                            alt="{{ $galeri->nama_kegiatan ?? '' }}" class="card-img-top img-fluid"
                                            style="object-fit: cover; min-height: 250px">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Services 2 Section -->

    {{-- Maps --}}
    <section>
        <!-- Section Title -->
        <div class="container" style="justify-content: left; text-align: left !important" data-aos="fade-up">
            <p style="color: #b92383">Lokasi Departemen</p>
            <h2 class="content-title mb-4" style="color: black; font-weight: bold">Map</h2>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3078007865197!2d100.4602634!3d-0.9165831999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b796db1f63a5%3A0x7a16861d110f88dd!2sFakultas%20Ilmu%20Sosial%20dan%20Ilmu%20Politik%20Universitas%20Andalas%20(FISIP%20Unand)!5e0!3m2!1sid!2sid!4v1734186621061!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    {{-- /Maps --}}
@endsection
