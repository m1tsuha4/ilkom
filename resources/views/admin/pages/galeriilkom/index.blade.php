@extends('admin.layouts.app')

@section('title', 'Galeri Ilmu Komunikasi | SIMT')

@section('content')
    <style>
        .card-hover {
            transition: transform 0.3s ease;
            /* Transisi selalu aktif */
        }

        .card-hover:hover {
            transform: scale(1.02);
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
            <div class="d-flex justify-content-between mb-3">
                <h3 style="color: #47245C">Galeri Ilmu Komunikasi</h3>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div data-bs-toggle="modal" data-bs-target="#addgambar" class="card-hover"
                        style="height: 250px; overflow: hidden; border-radius: 0.9rem; border: 2px dashed #47245C; cursor: pointer">
                        <div class="d-flex flex-column h-100 align-items-center justify-content-center gap-2">
                            <img src="{{ asset('dist/images/addPicture.svg') }}" alt="">
                            <p class="text-center fw-bold" style="color: #47245C">Klik Untuk Menambah Gambar</p>
                        </div>
                    </div>
                </div>
                @foreach ($data as $item)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="position-relative">
                            <div data-bs-toggle="modal" data-bs-target="#editgambar{{ $item->id }}"
                                class="card shadow position-relative z-1 card-hover"
                                style="max-height: 250px; overflow: hidden; border-radius: 0.9rem;">
                                <img src="{{ asset('dist/assets/img/galeriilkom/' . $item->image) }}"
                                    alt="{{ $item->image ?? '' }}" class="card-img-top img-fluid"
                                    style="object-fit: cover; min-height: 250px">
                            </div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#hapusgambar{{ $item->id }}"
                                class="bg-delete position-absolute top-0 start-100 translate-middle z-2 py-1 px-2 rounded-pill text-light text-sm">
                                x
                            </a>
                        </div>
                    </div>

                    <!-- Modal Edit Gambar -->
                    <div class="modal fade" id="editgambar{{ $item->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="editgambarLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="editgambarLabel">Detail Data
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('galeriilkom.update', $item->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="d-flex justify-content-center mb-3">
                                            <img src="{{ asset('dist/assets/img/Galeriilkom/' . $item->image) }}"
                                                alt="{{ $item->image ?? '' }}" class="img-fluid" style="max-width: 500px">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
                                            <input type="text" class="form-control" id="nama_kegiatan"
                                                name="nama_kegiatan" value="{{ $item->nama_kegiatan ?? '' }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Perbarui Foto</label>
                                            <input class="form-control" type="file" id="formFile" name="image">
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

                    <!-- Modal Hapus Gambar -->
                    <div class="modal fade" id="hapusgambar{{ $item->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="hapusgambarLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="hapusgambarLabel">Hapus
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
                                    <form action="{{ route('galeriilkom.destroy', $item->id) }}" method="POST">
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

            <!-- Modal Add Gambar -->
            <div class="modal fade" id="addgambar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="addgambarLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addgambarLabel">Tambah Data
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('galeriilkom.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
                                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Foto</label>
                                    <input class="form-control" type="file" id="formFile" name="image">
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
