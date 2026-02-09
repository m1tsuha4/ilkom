@extends('admin.layouts.app')

@section('title', 'Edit Visi & Misi | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 style="color: #47245C">Edit Visi & Misi</h3>
                    <div class="tab-content mt-3">
                        <form action="{{ route('visimisi.update.manage', $dataVisiMisi->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="editor-visi" class="form-label">Visi</label>
                                <textarea id="editor-visi" name="visi">{!! $dataVisiMisi->visi ?? '' !!}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="editor-misi" class="form-label">Misi</label>
                                <textarea id="editor-misi" rows="10" name="misi">{!! $dataVisiMisi->misi ?? '' !!}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="editor-tujuan" class="form-label">Tujuan</label>
                                <textarea id="editor-tujuan" rows="10" name="tujuan">{!! $dataVisiMisi->tujuan ?? '' !!}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="editor-sasaran_tujuan" class="form-label">Sasaran Tujuan</label>
                                <textarea id="editor-sasaran_tujuan" rows="10" name="sasaran_tujuan">{!! $dataVisiMisi->sasaran_tujuan ?? '' !!}</textarea>
                            </div>

                            <button type="submit" class="btn form-control text-light"
                                style="background-color: #47245C; border-radius: 0.5rem">Perbarui</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
