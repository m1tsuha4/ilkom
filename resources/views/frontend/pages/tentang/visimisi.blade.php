@extends('frontend.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(/dist_frontend/assets/img/page-title-bg.webp)">
        <div class="container position-relative">
            <h2 style="font-weight: bold">Visi & Misi Departemen Ilmu Komunikasi</h2>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- About 3 Section -->
    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p style="text-align: justify; color: #343434">
                        @if ($dataVisiMisi)
                            {!! $dataVisiMisi->visi ?? '' !!}
                            {!! $dataVisiMisi->misi ?? '' !!}
                            {!! $dataVisiMisi->tujuan ?? '' !!}
                            {!! $dataVisiMisi->sasaran_tujuan ?? '' !!}
                        @else
                            <p class="text-center fw-bold fs-3 py-5">Visi & Misi Belum Diisi</p>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /About 3 Section -->
@endsection
