@extends('admin.layouts.app')

@section('title', 'Edit Konsentrasi Penjurusan | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="" style="color: #47245C">Edit Konsentrasi Penjurusan</h3>
                    <div class="tab-content mt-3">
                        <form action="{{ route('konsentrasipenjurusan.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama"
                                    value="{{ $item->nama ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="link_pdf" class="form-label">Link Pdf</label>
                                <input type="link" name="link_pdf" class="form-control" id="link_pdf"
                                    value="{{ $item->link_pdf ?? '' }}">
                            </div>
                            <button type="submit" class="btn form-control text-light"
                                style="background-color: #47245C">Update</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
