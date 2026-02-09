@extends('frontend.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(/dist_frontend/assets/img/page-title-bg.webp)">
        <div class="container position-relative">
            <h2 style="font-weight: bold">{{ $item->judul ?? '' }}</h2>
        </div>
    </div>
    <!-- End Page Title -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">
                        <article>
                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-clock"></i>
                                        <time
                                            datetime="2020-01-01">{{ $item->created_at ? \Carbon\Carbon::parse($item->created_at)->translatedFormat('l, d F Y') : '' }}</time>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-img mt-3">
                                <img src="{{ asset('dist/assets/img/subkemahasiswaan/' . $item->image ?? '') }}"
                                    alt="" style="width: 100%" />
                            </div>
                            <div class="content">
                                <p style="text-align: justify; padding-bottom: 10px">
                                    {!! $item->isi_halaman ?? '' !!}
                                </p>
                                <p>Link : <a href="{{ $item->link ?? '' }}" target="_blank">{{ $item->judul ?? '' }}</a></p>
                            </div>
                            <!-- End post content -->
                        </article>
                    </div>
                </section>
                <!-- /Blog Details Section -->
            </div>
        </div>
    </div>
@endsection
