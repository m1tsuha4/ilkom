@extends('admin.layouts.app')

@section('title', 'Edit Data Fakultas | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 style="color: #47245C">Edit Data Fakultas</h3>
                    <div class="tab-content mt-4">
                        <form action="{{ route('fakultas.update.manage', $dataFakultas->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="jml_mahasiswa" class="form-label fw-bold">Jumlah Mahasiswa</label>
                                        <input type="number" name="jml_mahasiswa" class="form-control" id="jml_mahasiswa"
                                            placeholder="Masukkan Jumlah Mahasiswa"
                                            value="{{ $dataFakultas->jml_mahasiswa }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="jml_dosen" class="form-label fw-bold">Jumlah Dosen</label>
                                        <input type="number" name="jml_dosen" class="form-control" id="jml_dosen"
                                            placeholder="Masukkan Jumlah Dosen" value="{{ $dataFakultas->jml_dosen }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="jml_publikasi" class="form-label fw-bold">Jumlah Publikasi</label>
                                        <input type="number" name="jml_publikasi" class="form-control" id="jml_publikasi"
                                            placeholder="Masukkan Jumlah Publikasi"
                                            value="{{ $dataFakultas->jml_publikasi }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="jml_alumni" class="form-label fw-bold">Jumlah Alumni</label>
                                        <input type="number" name="jml_alumni" class="form-control" id="jml_alumni"
                                            placeholder="Masukkan Jumlah Alumni" value="{{ $dataFakultas->jml_alumni }}">
                                    </div>
                                </div>
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
