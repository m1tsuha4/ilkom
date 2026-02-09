@extends('admin.layouts.app')

@section('title', 'Dosen | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="d-flex justify-content-between mb-3">
                <h3 class="" style="color: #47245C">Daftar Dosen Ilmu Ekonomi</h3>
                <a href="{{ route('dosen.create') }}" class="btn btn-sm pt-2 px-3 fw-bold"
                    style="border: 1px solid #47245C; border-radius: 0.5rem">
                    <img src="{{ asset('dist/images/addIcon.svg') }}" alt="" class="pe-1">
                    <span class="pt-2" style="color: #47245C;">Tambah</span>
                </a>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="tab-content table-responsive">
                        <div class="tab-pane show active" id="basic-datatable-preview">
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr style="background-color: #B92383; color: white; border-radius: 0.5rem">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>NIDN</th>
                                        <th>Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama ?? '' }}</td>
                                            <td>{{ $item->nip ?? '-' }}</td>
                                            <td>{{ $item->nidn ?? '-' }}</td>
                                            <td>
                                                @if ($item->kategori == 'Kadep')
                                                    Kepala Departemen
                                                @elseif($item->kategori == 'Staff')
                                                    Staff Akademik
                                                @else
                                                    {{ $item->kategori ?? '' }}
                                                @endif
                                            </td>
                                            <td>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#detaildosen{{ $item->id }}">
                                                    <img src="{{ asset('dist/images/eyeIcon.svg') }}" alt="">
                                                </a>
                                                <a href="{{ route('dosen.edit', $item->id) }}" class="btn">
                                                    <img src="{{ asset('dist/images/editIcon.svg') }}" alt="">
                                                </a>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#hapusdosen{{ $item->id }}">
                                                    <img src="{{ asset('dist/images/trashIcon.svg') }}" alt="">
                                                </a>
                                            </td>
                                        </tr>

                                        <!-- Modal Detail Dosen -->
                                        <div class="modal fade" id="detaildosen{{ $item->id }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="detaildosenLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="detaildosenLabel">
                                                            Detail Data {{ $item->kategori ?? '' }}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex justify-content-center mb-3">
                                                            <img src="{{ asset('dist/assets/img/dosen/' . $item->image) }}"
                                                                alt="" class="img-fluid img-thumbnail mb-3 shadow"
                                                                style="max-width: 500px">
                                                        </div>
                                                        <div class="container row mx-auto px-5">
                                                            <div class="col-6 mb-2">
                                                                <div class="d-flex">
                                                                    <span class="fw-bold col-3">Nama</span>
                                                                    <span>:</span>
                                                                    <span class="ps-2">{{ $item->nama ?? '' }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <div class="d-flex">
                                                                    <span class="fw-bold col-3">NIP</span>
                                                                    <span>:</span>
                                                                    <span class="ps-2">{{ $item->nip ?? '' }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <div class="d-flex">
                                                                    <span class="fw-bold col-3">NIDN</span>
                                                                    <span>:</span>
                                                                    <span class="ps-2">{{ $item->nidn ?? '' }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <div class="d-flex">
                                                                    <span class="fw-bold col-3">TTL</span>
                                                                    <span>:</span>
                                                                    <span class="ps-2">
                                                                        {{ $item->tempat_lahir ?? '' }} /
                                                                        {{ \Carbon\Carbon::parse($item->tanggal_lahir ?? '')->locale('id')->translatedFormat('d F Y') }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <div class="d-flex">
                                                                    <span class="fw-bold col-3">Pangkat / Gol</span>
                                                                    <span>:</span>
                                                                    <span class="ps-2">
                                                                        {{ $item->rPangkat->pangkat ?? '' }} /
                                                                        {{ $item->rGolongan->golongan ?? '' }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <div class="d-flex">
                                                                    <span class="fw-bold col-3">Jabatan</span>
                                                                    <span>:</span>
                                                                    <span
                                                                        class="ps-2">{{ $item->rJabatan->jabatan ?? '' }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="d-flex">
                                                                    <span class="fw-bold col-3">Konsentrasi</span>
                                                                    <span>:</span>
                                                                    <span
                                                                        class="ps-2">{{ $item->rKonsentrasi->konsentrasi ?? '' }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="d-flex">
                                                                    <span class="fw-bold col-3">Bidang Kajian</span>
                                                                    <span>:</span>
                                                                    <span>
                                                                        @if ($item->rBidangKajian->count() > 0)
                                                                            <ul>
                                                                                @foreach ($item->rBidangKajian as $bk)
                                                                                    <li>
                                                                                        {{ $bk->bidang_kajian ?? '' }}
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        @else
                                                                            <span class="ps-2">-</span>
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <div class="d-flex">
                                                                    <span class="fw-bold col-3">Telepon / Fax</span>
                                                                    <span>:</span>
                                                                    <span class="ps-2">
                                                                        {{ $item->telpon ?? '' }} /
                                                                        {{ $item->fax ?? '' }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <div class="d-flex">
                                                                    <span class="fw-bold col-3">Email</span>
                                                                    <span>:</span>
                                                                    <span class="ps-2">{{ $item->email ?? '' }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 my-2">
                                                                <div class="d-flex">
                                                                    <span class="fw-bold col-3">Alamat Instansi</span>
                                                                    <span>:</span>
                                                                    <span
                                                                        class="ps-2">{{ $item->alamat_instansi ?? '' }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mb-2">
                                                                <div class="d-flex">
                                                                    <span class="fw-bold col-3">Sarjana (S1)</span>
                                                                    <span>:</span>
                                                                    <span class="ps-2">{{ $item->s1 ?? '' }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mb-2">
                                                                <div class="d-flex">
                                                                    <span class="fw-bold col-3">Magister (S2)</span>
                                                                    <span>:</span>
                                                                    <span class="ps-2">{{ $item->s2 ?? '' }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mb-2">
                                                                <div class="d-flex">
                                                                    <span class="fw-bold col-3">Doktor (S3)</span>
                                                                    <span>:</span>
                                                                    <span class="ps-2">{{ $item->s3 ?? '' }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-danger"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Hapus Dosen -->
                                        <div class="modal fade" id="hapusdosen{{ $item->id }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="hapusdosenLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="hapusdosenLabel">Hapus
                                                            Data
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <img src="{{ asset('dist/images/bin.gif') }}" alt=""
                                                            class="img-fluid w-25">
                                                        <p>apa anda yakin ingin menghapus data?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('dosen.destroy', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-sm btn-danger">Hapus</button>
                                                        </form>
                                                        <button type="button" class="btn btn-sm btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end preview-->
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
