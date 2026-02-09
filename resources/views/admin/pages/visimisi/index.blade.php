@extends('admin.layouts.app')

@section('title', 'Visi & Misi | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('visimisi.manage') }}" class="btn my-3 text-light fw-bold"
                            style="border-radius: 0.5rem; background-color: #e7a11e">Manage</a>
                    </div>

                    @if ($dataVisiMisi)
                        {!! $dataVisiMisi->visi ?? '' !!}
                        {!! $dataVisiMisi->misi ?? '' !!}
                        {!! $dataVisiMisi->tujuan ?? '' !!}
                        {!! $dataVisiMisi->sasaran_tujuan ?? '' !!}
                    @else
                        <p class="text-center fw-bold fs-3 py-5">Visi & Misi Belum Diisi</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
