@extends('admin.layouts.app')

@section('title', 'Akademik | SIMT')

@section('content')
    <style>
        .card-hover {
            transition: transform 0.3s ease;
            color: #47245C
                /* Transisi selalu aktif */
        }

        .card-hover:hover {
            transform: scale(1.02);
            color: #D39013;
            /* Efek hover */
        }

        .bg-delete {
            background-color: #959595;
        }

        .bg-delete:hover {
            background-color: rgb(255, 0, 0, 0.8);
        }
    </style>
    <div class="row mt-5">
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div data-bs-toggle="modal" data-bs-target="#addakademik" class="card-hover"
                        style="height: 250px; overflow: hidden; border-radius: 0.9rem; border: 2px dashed #47245C; cursor: pointer">
                        <div class="d-flex flex-column h-100 align-items-center justify-content-center gap-2">
                            <img src="{{ asset('dist/images/addTentang.svg') }}" alt="">
                            <p class="text-center fw-bold fs-4" style="color: #47245C">Tambah Sub Navbar</p>
                        </div>
                    </div>
                </div>
                <a href="{{ route('kurikulum.index') }}" class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="position-relative">
                        <div data-bs-toggle="modal" data-bs-target="#editgambar"
                            class="card shadow position-relative z-1 card-hover"
                            style="min-height: 250px; overflow: hidden; border-radius: 0.9rem;">
                            <div class="card-body d-flex flex-column h-100 align-items-center justify-content-center">
                                <p class="text-center fw-bold fs-4">Kurikulum</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('akreditasidepartemen.index') }}" class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="position-relative">
                        <div data-bs-toggle="modal" data-bs-target="#editgambar"
                            class="card shadow position-relative z-1 card-hover"
                            style="min-height: 250px; overflow: hidden; border-radius: 0.9rem;">
                            <div class="card-body d-flex flex-column h-100 align-items-center justify-content-center">
                                <p class="text-center fw-bold fs-4">Akreditasi Departemen</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('sop.index') }}" class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="position-relative">
                        <div data-bs-toggle="modal" data-bs-target="#editgambar"
                            class="card shadow position-relative z-1 card-hover"
                            style="min-height: 250px; overflow: hidden; border-radius: 0.9rem;">
                            <div class="card-body d-flex flex-column h-100 align-items-center justify-content-center">
                                <p class="text-center fw-bold fs-4">SOP</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('sinopsismatkul.index') }}" class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="position-relative">
                        <div data-bs-toggle="modal" data-bs-target="#editgambar"
                            class="card shadow position-relative z-1 card-hover"
                            style="min-height: 250px; overflow: hidden; border-radius: 0.9rem;">
                            <div class="card-body d-flex flex-column h-100 align-items-center justify-content-center">
                                <p class="text-center fw-bold fs-4">Distribusi Mata Kuliah</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('kalenderakademik.index') }}" class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="position-relative">
                        <div data-bs-toggle="modal" data-bs-target="#editgambar"
                            class="card shadow position-relative z-1 card-hover"
                            style="min-height: 250px; overflow: hidden; border-radius: 0.9rem;">
                            <div class="card-body d-flex flex-column h-100 align-items-center justify-content-center">
                                <p class="text-center fw-bold fs-4">Kalender Akademik</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('konsentrasipenjurusan.index') }}" class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="position-relative">
                        <div data-bs-toggle="modal" data-bs-target="#editgambar"
                            class="card shadow position-relative z-1 card-hover"
                            style="min-height: 250px; overflow: hidden; border-radius: 0.9rem;">
                            <div class="card-body d-flex flex-column h-100 align-items-center justify-content-center">
                                <p class="text-center fw-bold fs-4">Pengumuman Konsentrasi Penjurusan</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('programsarjana.index') }}" class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="position-relative">
                        <div data-bs-toggle="modal" data-bs-target="#editgambar"
                            class="card shadow position-relative z-1 card-hover"
                            style="min-height: 250px; overflow: hidden; border-radius: 0.9rem;">
                            <div class="card-body d-flex flex-column h-100 align-items-center justify-content-center">
                                <p class="text-center fw-bold fs-4">Program Sarjana</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('jurnal.index') }}" class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="position-relative">
                        <div data-bs-toggle="modal" data-bs-target="#editgambar"
                            class="card shadow position-relative z-1 card-hover"
                            style="min-height: 250px; overflow: hidden; border-radius: 0.9rem;">
                            <div class="card-body d-flex flex-column h-100 align-items-center justify-content-center">
                                <p class="text-center fw-bold fs-4">Jurnal</p>
                            </div>
                        </div>
                    </div>
                </a>

                @foreach ($data as $item)
                    <div class="position-relative col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ $item->link ?? '' }}" target="_blank">
                            <div data-bs-toggle="modal" data-bs-target="#editgambar"
                                class="card shadow position-relative z-1 card-hover"
                                style="min-height: 250px; overflow: hidden; border-radius: 0.9rem;">
                                <div class="card-body d-flex flex-column h-100 align-items-center justify-content-center">
                                    <p class="text-center fw-bold fs-4" style="color: #47245C">{{ $item->judul ?? '' }}</p>
                                </div>
                            </div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#hapusakademik{{ $item->id }}"
                                class="bg-delete position-absolute top-0 start-100 translate-middle z-2 py-1 px-2 rounded-pill text-light text-sm">
                                x
                            </a>
                        </a>

                        <button type="button" data-bs-toggle="modal" data-bs-target="#editakademik{{ $item->id }}"
                            class="btn position-absolute mt-2"
                            style="top: 50%; left: 50%; transform: translate(-50%, -50%); background: none; border: none;">
                            <img src="{{ asset('dist/images/editTentang.svg') }}" alt="Edit"
                                style="cursor: pointer;">
                        </button>
                    </div>

                    <!-- Modal Edit Akademik -->
                    <div class="modal fade" id="editakademik{{ $item->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="editakademikLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="editakademikLabel">Detail Data
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('akademik.update', $item->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="judul" class="form-label">Judul Navigasi</label>
                                            <input type="text" class="form-control" id="judul" name="judul"
                                                value="{{ $item->judul ?? '' }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="link" class="form-label">Link</label>
                                            <input type="link" class="form-control" id="link" name="link"
                                                value="{{ $item->link ?? '' }}">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-sm"
                                        style="background-color: #47245C; color: white">Update</button>
                                    </form>
                                    <button type="button" class="btn btn-sm btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Hapus Akademik -->
                    <div class="modal fade" id="hapusakademik{{ $item->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="hapusakademikLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="hapusakademikLabel">Hapus
                                        Data
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <img src="{{ asset('dist/images/bin.gif') }}" alt="" class="img-fluid w-25">
                                    <p>apa anda yakin ingin menghapus data?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('akademik.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                    <button type="button" class="btn btn-sm btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Modal Add Akademik -->
            <div class="modal fade" id="addakademik" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="addakademikLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addakademikLabel">Tambah Data
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('akademik.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul Navigasi</label>
                                    <input type="text" class="form-control" id="judul" name="judul">
                                </div>
                                <div class="mb-3">
                                    <label for="link" class="form-label">Link</label>
                                    <input type="link" class="form-control" id="link" name="link">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-sm"
                                style="background-color: #47245C; color: white">Tambah</button>
                            </form>
                            <button type="button" class="btn btn-sm btn-secondary"
                                data-bs-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
