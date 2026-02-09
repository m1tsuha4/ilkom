@extends('admin.layouts.app')

@section('title', 'Akreditasi Departemen | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <h4 class="mb-3" style="color: #47245C">Akreditasi Departemen</h4>
            <div class="card">
                <div class="card-body">
                    <div class="tab-content mt-3">
                        <form action="{{ route('akreditasidepartemen.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="formFile" class="form-label fw-bold">Gambar</label>
                                <input class="form-control" type="file" id="formFile" name="image" required>
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label fw-bold">Link</label>
                                <input class="form-control" type="text" id="link" name="link"
                                    value="{{ old('link') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label fw-bold">Judul</label>
                                <input class="form-control" type="text" id="judul" name="judul"
                                    value="{{ old('judul') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="isi_halaman" class="form-label fw-bold">Isi Halaman</label>
                                <textarea id="isi_halaman" rows="10" name="isi_halaman" class="form-control">{{ old('isi_halaman') }}</textarea>
                            </div>

                            <button type="submit" class="btn form-control text-light"
                                style="background-color: #47245C; border-radius: 0.5rem">Simpan</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
