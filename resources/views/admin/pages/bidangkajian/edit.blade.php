@extends('admin.layouts.app')

@section('title', 'Edit Bidang Kajian | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="" style="color: #47245C">Edit Bidang Kajian</h3>
                    <div class="tab-content mt-3">
                        <form action="{{ route('bidangkajian.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="bidangkajian" class="form-label">Bidang Kajian</label>
                                <input type="text" name="bidang_kajian" class="form-control" id="bidangkajian"
                                    value="{{ $item->bidang_kajian ?? '' }}">
                            </div>
                            <button type="submit" class="btn form-control text-light"
                                style="background-color: #47245C; color: white">Update</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
