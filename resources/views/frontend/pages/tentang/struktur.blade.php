@extends('frontend.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(/dist_frontend/assets/img/page-title-bg.webp)">
        <div class="container position-relative">
            <h2 style="font-weight: bold">Struktur Organisasi</h2>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- About 3 Section -->
    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 justify-content-center text-center">
                    <img src="{{ isset($dataStruktur->image) ? asset('dist/assets/img/strukturorganisasi/' . $dataStruktur->image) : '' }}"
                        alt="{{ $dataStruktur->judul ?? '' }}" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- /About 3 Section -->

    <!-- About 3 Section -->
    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p style="text-align: justify; color: #343434">
                        {!! $dataStruktur->isi_halaman ?? '' !!}
                    </p>
                    <span>Link : </span><a href="{{ $dataStruktur->link ?? '' }}">{{ $dataStruktur->judul ?? '' }}</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /About 3 Section -->
@endsection
