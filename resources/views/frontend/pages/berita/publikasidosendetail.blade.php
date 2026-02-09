@extends('frontend.layouts.app')

@section('content')
    <style>
        .text-wrap {
            word-wrap: break-word;
            word-break: break-word;
            white-space: normal;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">
                        <article>
                            <h2 class="title" style="color: black">{{ $dataPublikasi->judul ?? '' }}</h2>
                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="{{ route('berita.publikasidetail', $dataPublikasi->id) }}">{{ $dataPublikasi->nama_penulis ?? '' }}</a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-clock"></i> <a
                                            href="{{ route('berita.publikasidetail', $dataPublikasi->id) }}"><time
                                                datetime="2020-01-01">{{ $dataPublikasi->created_at ? \Carbon\Carbon::parse($dataPublikasi->created_at)->translatedFormat('l, d F Y') : '' }}</time></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-img mt-3">
                                <img src="{{ asset('dist/assets/img/publikasidosen/' . $dataPublikasi->image ?? '') }}"
                                    alt="" style="width: 100%" />
                            </div>
                            <div class="content">
                                <p style="text-align: justify; padding-bottom: 10px">
                                    {!! $dataPublikasi->isi_halaman ?? '' !!}
                                </p>
                            </div>
                            <!-- End post content -->
                        </article>

                        <div class="container mt-5" data-aos="fade-up">
                            <h3 class="content-title mb-4" style="color: black; font-weight: bold">Baca Publikasi Dosen
                                Lainnya!</h3>
                        </div>
                        <div class="row gy-5">
                            @foreach ($randomPublikasi as $random)
                                <div class="col-lg-4 col-md-6">
                                    <a href="{{ route('berita.publikasidetail', $random->id) }}"
                                        class="readmore stretched-link">
                                        <div data-aos="fade-up" data-aos-delay="100">
                                            <div class="overflow-hidden" style="max-height: 150px">
                                                <img src="{{ asset('dist/assets/img/publikasidosen/' . $random->image ?? '') }}"
                                                    class="img-fluid" alt="{{ $random->judul ?? '' }}"
                                                    style="width: 100%; object-fit: cover" />
                                            </div>
                                            <div style="margin-top: 10px">
                                                <div
                                                    style="display: flex; align-items: center; color: gray; font-size: 14px">
                                                    <i class="bi bi-calendar"></i>
                                                    <span
                                                        style="margin-left: 5px">{{ $random->created_at ? \Carbon\Carbon::parse($random->created_at)->translatedFormat('d F Y') : '' }}</span>
                                                </div>
                                                <h3 class="text-wrap"
                                                    style="color: black; font-size: 16px; margin-top: 5px; font-weight: bold">
                                                    {{ $random->judul ?? '' }}</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <!-- /Blog Details Section -->
            </div>

            <div class="col-lg-4 sidebar">
                <div class="widgets-container">
                    <!-- Recent Posts Widget 2 -->
                    <div class="recent-posts-widget-2 widget-item">
                        <h3 class="widget-title">Publikasi Dosen Terbaru</h3>
                        @foreach ($publikasi8 as $publikasi)
                            <div class="post-item">
                                <time
                                    datetime="2020-01-01">{{ $publikasi->created_at ? \Carbon\Carbon::parse($publikasi->created_at)->translatedFormat('d F Y') : '' }}</time>
                                <h4 class="mt-1"><a
                                        href="{{ route('berita.publikasidetail', $publikasi->id) }}">{{ $publikasi->judul ?? '' }}</a>
                                </h4>
                                <p style="font-weight: bold">
                                    <a href="{{ route('berita.publikasidetail', $publikasi->id) }}"><u>Baca</u></a>
                                </p>
                            </div>
                        @endforeach
                        <!-- End recent post item-->
                    </div>
                    <!--/Recent Posts Widget 2 -->
                </div>
            </div>
        </div>
    </div>
@endsection
