@extends('admin.layouts.app')

@section('title', 'Akreditasi Departemen | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-6">
            <div class="card py-3">
                <div class="card-header">
                    <h4 class="mb-3" style="color: #47245C">Cover Halaman Akreditasi Departemen</h4>
                    @if ($akreditasi->image)
                        <img src="{{ asset('dist/assets/img/akreditasidepartemen/' . $akreditasi->image ?? '') }}"
                            alt="" class="img-fluid img-thumbnail mb-1" style="max-width:600px">
                    @elseif ($akreditasi->link)
                        <div
                            style="max-width: 100%; aspect-ratio: 16/9; border: 2px solid #f00; overflow: hidden; border-radius: 8px;">
                            <x-embed url="{{ $akreditasi->link ?? '' }}" aspect-ratio="16:9" />
                        </div>
                    @else
                        <p>Tidak Ada Cover</p>
                    @endif
                </div>
                <div class="card-body">
                    <div class="d-flex gap-1">
                        <p class="fw-bold">Judul</p>
                        <p>:</p>
                        <p>{{ $akreditasi->judul ?? '' }}</p>
                    </div>
                    {{-- <div class="d-flex gap-1">
                        <p class="fw-bold">Nama Penulis</p>
                        <p>:</p>
                        <p>{{ $akreditasi->nama_penulis ?? '' }}</p>
                    </div> --}}
                    <div class="d-flex gap-1">
                        <p class="fw-bold">Link</p>
                        <p>:</p>
                        <p><a href="{{ $akreditasi->link ?? '' }}" target="_blank">{{ $akreditasi->judul ?? '' }}</a></p>
                    </div>
                    <div class="d-flex flex-column">
                        {{-- <p class="fw-bold mb-1">Isi Halaman</p> --}}
                        <p>{!! $akreditasi->isi_halaman ?? '' !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
