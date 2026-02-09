@extends('admin.layouts.app')

@section('title', 'Berita | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="d-flex justify-content-between mb-3">
                <h3 style="color: #47245C">Daftar Postingan Berita</h3>
                <a href="{{ route('postinganberita.create') }}" class="btn btn-sm pt-2 px-3 fw-bold"
                    style="border: 1px solid #47245C; border-radius: 0.5rem">
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
                                        <th>Judul Agenda</th>
                                        <th>Nama Penulis</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->judul ?? '' }}</td>
                                            <td>{{ $item->nama_penulis ?? '' }}</td>
                                            <td>
                                                <a href="{{ route('postinganberita.show', $item->id) }}" class="btn">
                                                    <img src="{{ asset('dist/images/eyeIcon.svg') }}" alt="">
                                                </a>
                                                <a href="{{ route('postinganberita.edit', $item->id) }}" class="btn">
                                                    <img src="{{ asset('dist/images/editIcon.svg') }}" alt="">
                                                </a>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#hapuspostinganberita{{ $item->id }}">
                                                    <img src="{{ asset('dist/images/trashIcon.svg') }}" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                        <!-- Modal Hapus Postingan Berita -->
                                        <div class="modal fade" id="hapuspostinganberita{{ $item->id }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="hapuspostinganberitaLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="hapuspostinganberitaLabel">Hapus
                                                            Data</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <img src="{{ asset('dist/images/bin.gif') }}" alt=""
                                                            class="img-fluid w-25">
                                                        <p>Apakah Anda yakin ingin menghapus data?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('postinganberita.destroy', $item->id) }}"
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
