@extends('admin.layouts.app')

@section('title', 'Sinopsis Mata Kuliah | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <h4 class="" style="color: #47245C">Pdf Sinopsis Mata Kuliah</h4>
            <img src="{{ asset('dist/images/pdf.svg') }}" alt="" class="img-fluid mb-3 me-2">
            <a href="{{ asset('dist/assets/pdf/sinopsismatkul/' . $item->pdf ?? '') }}"
                style="color: #47245C; text-decoration: underline" target="_blank">{{ $item->judul ?? '' }}.pdf</a>
            <div class="card">
                <div class="card-body">
                    <div class="tab-content mt-3">
                        <form action="{{ route('sinopsismatkul.update', $item->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="judul" class="form-label fw-bold">Judul</label>
                                <input class="form-control" type="text" id="judul" name="judul"
                                    value="{{ $item->judul ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label fw-bold">Ganti Pdf</label>
                                <input class="form-control" type="file" id="formFile" name="pdf">
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
