@extends('admin.layouts.app')

@section('title', 'Create Golongan | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="" style="color: #47245C">Create Golongan</h3>
                    <div class="tab-content mt-3">
                        <form action="{{ route('golongan.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="golongan" class="form-label">Golongan</label>
                                <input type="text" name="golongan" class="form-control" id="golongan"
                                    value="{{ old('golongan') }}">
                            </div>
                            <button type="submit" class="btn form-control text-light"
                                style="background-color: #47245C">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
