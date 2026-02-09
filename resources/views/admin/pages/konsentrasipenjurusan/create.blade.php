@extends('admin.layouts.app')

@section('title', 'Create Konsentrasi Penjurusan | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="" style="color: #47245C">Create Konsentrasi Penjurusan</h3>
                    <div class="tab-content mt-3">
                        <form action="{{ route('konsentrasipenjurusan.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama"
                                    value="{{ old('nama') }}">
                            </div>
                            <div class="mb-3">
                                <label for="link_pdf" class="form-label">Link Pdf</label>
                                <input type="link" name="link_pdf" class="form-control" id="link_pdf"
                                    value="{{ old('link_pdf') }}">
                            </div>
                            <button type="submit" class="btn form-control text-light"
                                style="background-color: #47245C; border-radius: 0.5rem">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
