@extends('frontend.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(/dist_frontend/assets/img/page-title-bg.webp)">
        <div class="container position-relative">
            <h2 style="font-weight: bold">Publikasi Dosen Departemen Ilmu Komunikasi</h2>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- About 3 Section -->
    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row gy-5">
                        @foreach ($dataPublikasi as $publikasi)
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ route('berita.publikasidetail', $publikasi->id ?? '') }}" class="">
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <div class="overflow-hidden" style="max-height: 200px">
                                            <img src="{{ asset('dist/assets/img/publikasidosen/' . $publikasi->image ?? '') }}"
                                                class="img-fluid" alt="{{ $berita8->judul ?? '' }}"
                                                style="width: 100%; object-fit: cover; min-height: 200px" />
                                        </div>
                                        <div style="margin-top: 10px">
                                            <div style="display: flex; align-items: center; color: gray; font-size: 14px">
                                                <i class="bi bi-calendar"></i>
                                                <span
                                                    style="margin-left: 5px">{{ $publikasi->created_at ? \Carbon\Carbon::parse($publikasi->created_at)->translatedFormat('l, d F Y') : '' }}</span>
                                            </div>
                                            <p style="color: #b92383; font-size: 14px" class="mt-1">
                                                {{ $publikasi->nama_penulis ?? '' }}
                                            </p>
                                            <h3 style="color: black; font-size: 16px; font-weight: bold">
                                                {{ $publikasi->judul ?? '' }}
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        <div class="d-flex justify-content-start">
                            {{ $dataPublikasi->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About 3 Section -->
@endsection
