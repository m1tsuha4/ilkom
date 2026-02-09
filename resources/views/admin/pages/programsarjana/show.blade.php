@extends('admin.layouts.app')

@section('title', 'Program Sarjana | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-6">
            <div class="card py-3">
                <div class="card-header">
                    <h4 class="mb-3" style="color: #47245C">Cover Halaman Program Sarjana</h4>
                    @if ($program->image)
                        <img src="{{ asset('dist/assets/img/programsarjana/' . $program->image ?? '') }}" alt=""
                            class="img-fluid img-thumbnail mb-1" style="max-width:600px">
                    @else
                        <p>Tidak Ada Cover</p>
                    @endif
                </div>
                <div class="card-body">
                    <div class="d-flex gap-1">
                        <p class="fw-bold">Judul</p>
                        <p>:</p>
                        <p>{{ $program->judul ?? '' }}</p>
                    </div>
                    <div class="d-flex flex-column">
                        {{-- <p class="fw-bold mb-1">Isi Halaman</p> --}}
                        <p>{!! $program->isi_halaman ?? '' !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
