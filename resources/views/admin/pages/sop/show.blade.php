@extends('admin.layouts.app')

@section('title', 'SOP | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-6">
            <div class="card py-3">
                <div class="card-header">
                    <h4 class="mb-3">Cover Halaman SOP</h4>
                    <img src="{{ asset('dist/assets/img/sop/' . $sop->image ?? '') }}" alt=""
                        class="img-fluid img-thumbnail mb-1" style="max-width:600px">
                </div>
                <div class="card-body">
                    <div class="d-flex gap-1">
                        <p class="fw-bold">Judul</p>
                        <p>:</p>
                        <p>{{ $sop->judul ?? '' }}</p>
                    </div>
                    <div class="d-flex gap-1">
                        <p class="fw-bold">Link</p>
                        <p>:</p>
                        <p><a href="{{ $sop->link ?? '' }}" target="_blank">{{ $sop->judul ?? '' }}</a></p>
                    </div>
                    <div class="d-flex flex-column">
                        <p class="fw-bold mb-1">Isi Halaman</p>
                        <p class="border p-3 rounded">{{ $sop->isi_halaman ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
