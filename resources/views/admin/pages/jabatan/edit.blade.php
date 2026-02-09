@extends('admin.layouts.app')

@section('title', 'Edit Jabatan | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="" style="color: #47245C">Edit Jabatan</h3>
                    <div class="tab-content mt-3">
                        <form action="{{ route('jabatan.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" id="jabatan"
                                    value="{{ $item->jabatan ?? '' }}">
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
