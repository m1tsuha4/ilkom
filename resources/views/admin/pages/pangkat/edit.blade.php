@extends('admin.layouts.app')

@section('title', 'Edit Pangkat | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="" style="color: #47245C">Edit Pangkat</h3>
                    <div class="tab-content mt-3">
                        <form action="{{ route('pangkat.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="pangkat" class="form-label">Pangkat</label>
                                <input type="text" name="pangkat" class="form-control" id="pangkat"
                                    value="{{ $item->pangkat ?? '' }}">
                            </div>
                            <button type="submit" class="btn form-control text-light"
                                style="background-color: #47245C;">Update</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
