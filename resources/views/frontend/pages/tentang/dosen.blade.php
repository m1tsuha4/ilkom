@extends('frontend.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(/dist_frontend/assets/img/page-title-bg.webp)">
        <div class="container position-relative">
            <h1>Dosen Departemen Ilmu Komunikasi</h1>
        </div>
    </div>
    <!-- End Page Title -->

    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <div class="row">
                @foreach ($dosen as $item)
                    @if ($item->kategori == 'Kadep')
                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('tentang.dosendetail', $item->id) }}">
                                <div class="card mb-3" style="min-height: 250px">
                                    <div class="row g-0">
                                        <div class="col-md-5 p-2">
                                            <div class="overflow-hidden" style="height: 250px; width: 170px">
                                                <img src="{{ asset('dist/assets/img/dosen/' . $item->image) }}"
                                                    alt="Image" class="img-fluid rounded-4 img-thumbnail"
                                                    style="width: 100%; height: 100%; object-fit: cover;" />
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <p style="font-size: 14px; color: #b92383; margin: 5px 0">Kepala Departemen
                                                    <br>
                                                    Ilmu Komunikasi
                                                </p>
                                                <h5 style="font-weight: bold; margin: 5px 0">{{ $item->nama ?? '' }}</h5>
                                                <h6 style="color: #b5b1b1; margin: 5px 0">{{ $item->nip ?? '' }}</h6>
                                                <h3 style="font-size: 14px; color: black; font-weight: bold; margin: 5px 0">
                                                    Konsentrasi:
                                                </h3>
                                                <h3 style="font-size: 14px; color: black; margin: 5px 0">
                                                    {{ $item->rKonsentrasi->konsentrasi ?? '' }}</h3>
                                                <h3 style="font-size: 14px; color: black; font-weight: bold; margin: 5px 0">
                                                    Bidang
                                                    Kajian
                                                </h3>
                                                @if ($item->rBidangkajian != null)
                                                    <h3 style="font-size: 14px; color: black; margin: 5px 0">
                                                        {{ $item->rBidangkajian->pluck('bidang_kajian')->implode(', ') }}
                                                    </h3>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('tentang.dosendetail', $item->id) }}">
                                <div class="card mb-3" style="min-height: 250px">
                                    <div class="row g-0">
                                        <div class="col-md-5 p-2">
                                            <div class="overflow-hidden" style="height: 250px; width: 170px">
                                                <img src="{{ asset('dist/assets/img/dosen/' . $item->image) }}"
                                                    alt="Image" class="img-fluid rounded-4 img-thumbnail"
                                                    style="width: 100%; height: 100%; object-fit: cover;" />
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <p style="font-size: 12px; color: #b92383; margin: 5px 0">
                                                    @if ($item->kategori == 'Dosen')
                                                        Dosen
                                                        <br>
                                                        Ilmu Komunikasi
                                                    @else
                                                        Staff Akademik
                                                        <br>
                                                        Ilmu Komunikasi
                                                    @endif
                                                </p>
                                                <h5 style="font-weight: bold; margin: 5px 0">{{ $item->nama ?? '' }}</h5>
                                                <h6 style="color: #b5b1b1; margin: 5px 0">{{ $item->nip ?? '' }}</h6>
                                                <h3 style="font-size: 12px; color: black; font-weight: bold; margin: 5px 0">
                                                    Konsentrasi:
                                                </h3>
                                                <h3 style="font-size: 12px; color: black; margin: 5px 0">
                                                    {{ $item->rKonsentrasi->konsentrasi ?? '' }}</h3>
                                                <h3 style="font-size: 12px; color: black; font-weight: bold; margin: 5px 0">
                                                    Bidang
                                                    Kajian
                                                </h3>
                                                @if ($item->kategori == 'Staff')
                                                    <h3 style="font-size: 14px; color: black; margin: 5px 0">-</h3>
                                                @endif

                                                @if ($item->rBidangkajian != null)
                                                    <h3 style="font-size: 14px; color: black; margin: 5px 0">
                                                        {{ $item->rBidangkajian->pluck('bidang_kajian')->implode(', ') }}
                                                    </h3>
                                                @else
                                                    <h3 style="font-size: 14px; color: black; margin: 5px 0">-</h3>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
