@extends('frontend.layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-8">
                <h5 class="mb-2" style="color: #b92383; margin: 5px 0">
                    @if ($data->kategori == 'Kadep')
                        Kepala Departemen Ilmu Komunikasi
                    @else
                        {{ $data->kategori ?? '' }}
                    @endif
                </h5>
                <h3 class="mb-2 fw-bold" style="color: #47245C; margin: 5px 0">{{ $data->nama ?? '' }}</h3>
                <h4 class="mb-4" style="color: #b5b1b1; margin: 5px 0">{{ $data->nip ?? '' }}</h4>

                <table>
                    <tr>
                        <td class="pb-3">NIP</td>
                        <td class="ps-4 pe-2 pb-3">:</td>
                        <td class="pb-3">{{ $data->nip ?? '' }}</td>
                    </tr>
                    <tr>
                        <td class="pb-3">NIDN</td>
                        <td class="ps-4 pe-2 pb-3">:</td>
                        <td class="pb-3">{{ $data->nidn ?? '' }}</td>
                    </tr>
                    <tr>
                        <td class="pb-3">Tempat/Tanggal Lahir</td>
                        <td class="ps-4 pe-2 pb-3">:</td>
                        <td class="pb-3"> {{ $data->tempat_lahir ?? '' }} /
                            {{ \Carbon\Carbon::parse($data->tanggal_lahir ?? '')->locale('id')->translatedFormat('d F Y') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="pb-3">Pangkat/Gol</td>
                        <td class="ps-4 pe-2 pb-3">:</td>
                        <td class="pb-3"> {{ $data->rPangkat->pangkat ?? '' }} /
                            {{ $data->rGolongan->golongan ?? '' }}</td>
                    </tr>
                    <tr>
                        <td class="pb-3">Jabatan</td>
                        <td class="ps-4 pe-2 pb-3">:</td>
                        <td class="pb-3">{{ $data->rJabatan->jabatan ?? '' }}</td>
                    </tr>
                    <tr>
                        <td class="pb-3">Konsentrasi</td>
                        <td class="ps-4 pe-2 pb-3">:</td>
                        <td class="pb-3">{{ $data->rKonsentrasi->konsentrasi ?? '' }}</td>
                    </tr>
                    <tr>
                        <td class="pb-3">Bidang Kajian</td>
                        <td class="ps-4 pe-2 pb-3">:</td>
                        <td class="pb-3">
                            @if ($data->rBidangKajian->count() > 0)
                                {{ $data->rBidangKajian->pluck('bidang_kajian')->implode(', ') }}
                            @else
                                <span class="ps-2">-</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="pb-3">Email</td>
                        <td class="ps-4 pe-2 pb-3">:</td>
                        <td class="pb-3">
                            {{ $data->email ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <td class="pb-3">Telepon/Fax</td>
                        <td class="ps-4 pe-2 pb-3">:</td>
                        <td class="pb-3">
                            {{ $data->telpon ?? '' }} /
                            {{ $data->fax ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <td class="pb-3">Pendidikan</td>
                        <td class="ps-4 pe-2 pb-3">:</td>
                        <td class="pb-3">
                            <p class="mb-1">Sarjana (S1) : {{ $data->s1 ?? '' }}</p>
                            <p class="mb-1"> Magister (S2) : {{ $data->s2 ?? '' }}</p>
                            <p class="mb-1">Doktor (S3) : {{ $data->s3 ?? '' }}</p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-12 col-md-4">
                <div class="position-relative" style="height: 500px; max-width: 500px;">
                    <!-- Card Ungu di Belakang -->
                    <div
                        style="position: absolute; background-color: #B92383; height: 500px; width: 400px; top: 30px; left: -30px; z-index: 0;">
                    </div>

                    <!-- Gambar di Atas -->
                    <div class="overflow-hidden position-relative" style="height: 500px; width: 400px; z-index: 1;">
                        <img src="{{ asset('dist/assets/img/dosen/' . $data->image) }}" alt="Image" class="img-fluid"
                            style="width: 100%; height: 100%; object-fit: cover;" />
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
