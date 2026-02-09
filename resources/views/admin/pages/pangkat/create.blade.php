@extends('admin.layouts.app')

@section('title', 'Create Pangkat | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="" style="color: #47245C">Create Pangkat</h3>
                    <div class="tab-content mt-3">
                        <form action="{{ route('pangkat.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="pangkat" class="form-label">Pangkat</label>
                                <input type="text" name="pangkat" class="form-control" id="pangkat"
                                    value="{{ old('pangkat') }}">
                            </div>
                            <button type="submit" class="btn form-control text-light"
                                style="background-color: #47245C; color: white">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
