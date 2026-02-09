@extends('admin.layouts.app')

@section('title', 'Berita | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <h4 class="mb-3" style="color: #47245C">Cover Halaman Postingan Berita</h4>
            @if ($item->image)
                <img src="{{ asset('dist/assets/img/postinganberita/' . $item->image ?? '') }}" alt=""
                    class="img-fluid img-thumbnail mb-3" style="max-width: 800px">
            @elseif ($item->link)
                <div
                    style="max-width: 60%; max-height: 20%; aspect-ratio: 16/9; border: 2px solid #f00; overflow: hidden; border-radius: 8px;">
                    <x-embed url="{{ $item->link ?? '' }}" aspect-ratio="16:9" />
                </div>
            @else
                <p>Tidak Ada Cover</p>
            @endif
            <div class="card mt-3">
                <div class="card-body">
                    <div class="tab-content mt-3">
                        <form action="{{ route('postinganberita.update', $item->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @if ($item->image)
                                <div class="mb-3">
                                    <label for="formFile" class="form-label fw-bold">Gambar</label>
                                    <input class="form-control" type="file" id="formFile" name="image">
                                </div>
                            @elseif ($item->link)
                                <div class="mb-3">
                                    <label for="link" class="form-label fw-bold">Link</label>
                                    <input class="form-control" type="text" id="link" name="link"
                                        value="{{ $item->link ?? '' }}">
                                </div>
                            @else
                                <p>Ada yang salah</p>
                            @endif
                            <div class="mb-3">
                                <label for="nama_penulis" class="form-label fw-bold">Nama Penulis</label>
                                <input class="form-control" type="text" id="nama_penulis" name="nama_penulis"
                                    value="{{ $item->nama_penulis ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label fw-bold">Judul</label>
                                <input class="form-control" type="text" id="judul" name="judul"
                                    value="{{ $item->judul ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="isi_halaman" class="form-label fw-bold">Isi Halaman</label>
                                <textarea id="isi_halaman" rows="10" name="isi_halaman" class="form-control">
                                    {{ $item->isi_halaman ?? '' }}
                                </textarea>
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
