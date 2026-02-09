@extends('admin.layouts.app')

@section('title', 'Create Jabatan | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="" style="color: #47245C">Create Jabatan</h3>
                    <div class="tab-content mt-3">
                        <form action="{{ route('jabatan.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" id="jabatan"
                                    value="{{ old('jabatan') }}">
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
