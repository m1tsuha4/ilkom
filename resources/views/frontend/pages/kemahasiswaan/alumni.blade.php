@extends('frontend.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(/dist_frontend/assets/img/page-title-bg.webp)">
        <div class="container position-relative">
            <h2 style="font-weight: bold">Data Alumni</h2>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- About 3 Section -->
    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 justify-content-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="background-color: #47245c; color: white">No</th>
                                <th scope="col" style="background-color: #47245c; color: white">Nama Data Alumni</th>
                                <th scope="col" style="background-color: #47245c; color: white">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataAlumni as $alumni)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $alumni->nama }}</td>
                                    <td><a href="{{ $alumni->link }}" target="_blank">Buka disini</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /About 3 Section -->
@endsection
