@extends('admin.layouts.app')

@section('title', 'Pengumuman | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="d-flex justify-content-between mb-3">
                <h3 style="color: #47245C">Daftar Pengumuman</h3>
                <a href="#" class="btn btn-sm pt-2 px-3 fw-bold" style="border: 1px solid #47245C; border-radius: 0.5rem"
                    data-bs-toggle="modal" data-bs-target="#addpengumuman">
                    <img src="{{ asset('dist/images/addIcon.svg') }}" alt="" class="pe-1">
                    <span style="color: #47245C;">Tambah</span>
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
                                        <th>Nama Pengumuman</th>
                                        <th>Link</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama ?? '' }}</td>
                                            <td><a href="{{ $item->link ?? '' }}"
                                                    target="_blank">{{ $item->link ?? '' }}</a></td>
                                            <td>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#editpengumuman{{ $item->id }}">
                                                    <img src="{{ asset('dist/images/editIcon.svg') }}" alt="">
                                                </a>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#hapuspengumuman{{ $item->id }}">
                                                    <img src="{{ asset('dist/images/trashIcon.svg') }}" alt="">
                                                </a>
                                            </td>
                                        </tr>

                                        <!-- Modal Edit Pengumuman -->
                                        <div class="modal fade" id="editpengumuman{{ $item->id }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="editpengumumanLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="editpengumumanLabel">Edit Data</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('pengumuman.update', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="nama" class="form-label">Nama</label>
                                                                <input type="text" name="nama" class="form-control"
                                                                    id="nama" placeholder="Masukkan nama pengumuman"
                                                                    value="{{ $item->nama ?? '' }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="link" class="form-label">Link</label>
                                                                <input type="text" name="link" class="form-control"
                                                                    id="link" placeholder="Masukkan link"
                                                                    value="{{ $item->link ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-sm"
                                                                style="background-color: #47245C; color: white">Perbarui</button>
                                                    </form>
                                                    <button type="button" class="btn btn-sm btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                        </div>

                        <!-- Modal Hapus Pengumuman -->
                        <div class="modal fade" id="hapuspengumuman{{ $item->id }}" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="hapuspengumumanLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="hapuspengumumanLabel">Hapus Data
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="{{ asset('dist/images/bin.gif') }}" alt=""
                                            class="img-fluid w-25">
                                        <p>Apakah Anda yakin ingin menghapus data?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('pengumuman.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
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
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Add Pengumuman -->
        <div class="modal fade" id="addpengumuman" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="addpengumumanLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addpengumumanLabel">Tambah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('pengumuman.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama"
                                    placeholder="Masukkan nama pengumuman">
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input type="text" name="link" class="form-control" id="link"
                                    placeholder="Masukkan link">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-sm"
                                style="background-color: #47245C; color: white">Tambah</button>
                    </form>
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
