@extends('admin.layouts.app')

@section('title', 'Count Visitors | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 style="color: #47245C">Jumlah Pengunjung</h3>
                <a href="#" data-bs-toggle="modal" data-bs-target="#reset" class="btn text-light fw-bold"
                    style="border-radius: 0.5rem; background-color: #e7a11e">Reset</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="tab-content table-responsive">
                        <div class="tab-pane show active" id="basic-datatable-preview">
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr style="background-color: #B92383; color: white; border-radius: 0.5rem">
                                        <th>No</th>
                                        <th>Negara</th>
                                        <th>Jumlah Pengunjung</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($visitors as $visitor)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="https://flagcdn.com/w40/{{ $visitor->country_code ?? 'unknown' }}.png"
                                                    alt="{{ $visitor->country }}" class="me-2 img-thumbnail"
                                                    style="width: 40px; height: 30px; object-fit: cover; border-radius: 2px;">
                                                {{ $visitor->country ?? '' }}
                                            </td>
                                            <td>{{ $visitor->total ?? '' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Reset Postingan Berita -->
        <div class="modal fade" id="reset" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="resetLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="resetLabel">Reset
                            Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ asset('dist/images/reset.gif') }}" alt="" class="img-fluid w-25">
                        <p>Apakah Anda yakin ingin mereset data?</p>
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('visitors.reset') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Reset</button>
                        </form>
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
