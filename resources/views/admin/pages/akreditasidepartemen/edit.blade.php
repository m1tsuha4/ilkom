@extends('admin.layouts.app')

@section('title', 'Akreditasi Departemen | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <h4 class="" style="color: #47245C">Gambar Akreditasi Departemen</h4>
            <img src="{{ asset('dist/assets/img/akreditasidepartemen/' . $item->image ?? '') }}" alt=""
                class="img-fluid img-thumbnail mb-3" style="max-width: 800px">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content mt-3">
                        <form action="{{ route('akreditasidepartemen.update', $item->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="formFile" class="form-label fw-bold">Gambar</label>
                                <input class="form-control" type="file" id="formFile" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label fw-bold">Link</label>
                                <input class="form-control" type="text" id="link" name="link"
                                    value="{{ $item->link ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label fw-bold">Judul</label>
                                <input class="form-control" type="text" id="judul" name="judul"
                                    value="{{ $item->judul ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="isi_halaman" class="form-label fw-bold">Isi Halaman</label>
                                <textarea id="isi_halaman" rows="10" name="isi_halaman" class="form-control">
                                    {{ $item->isi_halaman ?? '' }}
                                </textarea>
                            </div>

                            <button type="submit" class="btn form-control text-light"
                                style="background-color: #47245C; border-radius: 0.5rem">Perbarui</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
