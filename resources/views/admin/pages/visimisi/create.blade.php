@extends('admin.layouts.app')

@section('title', 'Create Visi & Misi | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 style="color: #47245C">Create Visi & Misi</h3>
                    <div class="tab-content mt-3">
                        <form action="{{ route('visimisi.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="editor-visi" class="form-label fw-bold">Visi</label>
                                <textarea id="editor-visi" name="visi"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="editor-misi" class="form-label fw-bold">Misi</label>
                                <textarea id="editor-misi" rows="10" name="misi"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="editor-tujuan" class="form-label fw-bold">Tujuan</label>
                                <textarea id="editor-tujuan" rows="10" name="tujuan"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="editor-sasaran_tujuan" class="form-label fw-bold">Sasaran Tujuan</label>
                                <textarea id="editor-sasaran_tujuan" rows="10" name="sasaran_tujuan"></textarea>
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
