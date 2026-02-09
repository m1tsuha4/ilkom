@extends('admin.layouts.app')

@section('title', 'Postingan Berita | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content mt-3">
                        <form action="{{ route('postinganberita.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex flex-wrap gap-2 align-items-center">
                                <div class="col-11">
                                    <div class="mb-3" id="input1">
                                        <label for="formFile" class="form-label fw-bold">Gambar</label>
                                        <input class="form-control" type="file" id="formFile" name="image" required>
                                    </div>

                                    <div class="mb-3" id="input2" style="display: none">
                                        <label for="link" class="form-label fw-bold">Link Youtube</label>
                                        <input class="form-control" type="text" id="link" name="link"
                                            value="{{ old('link') }}">
                                    </div>
                                </div>

                                <div class="">
                                    <div class="d-flex gap-2">
                                        <div class="" id="button1Container" style="display: none">
                                            <a href="#" class="btn btn-small btn-outline-warning" id="button1">Local
                                                <img class="shadow" src="{{ asset('dist/assets/img/folder.png') }}"
                                                    alt="" style="max-width: 20px" /></a>
                                        </div>
                                        <div class="" id="button2Container">
                                            <a href="#" class="btn btn-small btn-outline-danger"
                                                id="button2">Youtube
                                                <img class="shadow" src="{{ asset('dist/assets/img/youtube.png') }}"
                                                    alt="" style="max-width: 20px" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="nama_penulis" class="form-label fw-bold">Nama Penulis</label>
                                <input class="form-control" type="text" id="nama_penulis" name="nama_penulis"
                                    value="{{ old('nama_penulis') }}">
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label fw-bold">Judul</label>
                                <input class="form-control" type="text" id="judul" name="judul"
                                    value="{{ old('judul') }}">
                            </div>
                            <div class="mb-3">
                                <label for="isi_halaman" class="form-label fw-bold">Isi Halaman</label>
                                <textarea id="isi_halaman" rows="10" name="isi_halaman" class="form-control">{{ old('isi_halaman') }}</textarea>
                            </div>

                            <button type="submit" class="btn form-control text-light"
                                style="background-color: #47245C; border-radius: 0.5rem">Simpan</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const input1 = document.getElementById("input1");
            const input2 = document.getElementById("input2");
            const fileInput = document.getElementById("formFile");
            const linkInput = document.getElementById("link");
            const button1Container = document.getElementById("button1Container");
            const button2Container = document.getElementById("button2Container");
            const button1 = document.getElementById("button1");
            const button2 = document.getElementById("button2");

            // Default state
            input1.style.display = "block";
            input2.style.display = "none";
            fileInput.required = true; // Image field required by default
            linkInput.required = false;
            button1Container.style.display = "none";
            button2Container.style.display = "block";

            // Switch to YouTube link
            button2.addEventListener("click", function(event) {
                event.preventDefault();

                input1.style.display = "none";
                button2Container.style.display = "none";
                fileInput.required = false; // Remove required from image input

                input2.style.display = "block";
                button1Container.style.display = "block";
                linkInput.required = true; // Add required to link input
            });

            // Switch to Image upload
            button1.addEventListener("click", function(event) {
                event.preventDefault();

                input2.style.display = "none";
                button1Container.style.display = "none";
                linkInput.required = false; // Remove required from link input

                input1.style.display = "block";
                button2Container.style.display = "block";
                fileInput.required = true; // Add required to image input
            });
        });
    </script>

@endsection
