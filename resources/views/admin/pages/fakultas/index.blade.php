@extends('admin.layouts.app')

@section('title', 'Data Fakultas | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h3 style="color: #47245C">Data Fakultas</h3>
                <a href="{{ route('fakultas.manage') }}" class="btn my-3 text-light fw-bold"
                    style="border-radius: 0.5rem; background-color: #e7a11e">Manage</a>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <p class="fw-bold text-center text-primary">Jumlah Mahasiswa</p>
                            <p class="fw-bold text-center fs-1 text-secondary">{{ $dataFakultas->jml_mahasiswa ?? 0 }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <p class="fw-bold text-center text-primary">Jumlah Dosen</p>
                            <p class="fw-bold text-center fs-1 text-secondary">{{ $dataFakultas->jml_dosen ?? 0 }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <p class="fw-bold text-center text-primary">Jumlah Publikasi</p>
                            <p class="fw-bold text-center fs-1 text-secondary">{{ $dataFakultas->jml_publikasi ?? 0 }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <p class="fw-bold text-center text-primary">Jumlah Alumni</p>
                            <p class="fw-bold text-center fs-1 text-secondary">{{ $dataFakultas->jml_alumni ?? 0 }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
