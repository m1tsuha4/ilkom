<footer id="footer" class="footer dark-background">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Ilmu Komunikasi</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Gedung B Lantai II FISIP Universitas Andalas</p>
                        <p>Kampus Unand Limau Manis, Kec, Pauh, Kota Padang, Sumatera Barat, Indonesia</p>
                    </div>
                </div>

                {{-- <div class="col-lg-2 col-md-3 footer-links"></div> --}}

                <div class="col-lg-2 col-md-3 footer-links"></div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Contact us</h4>
                    <ul>
                        <li><a href="https://www.youtube.com/@komunikasiunand" target="_blank">Ranah
                                Komunikasi</a></li>
                        <li><a href="https://www.instagram.com/officialkomunikasiunand?igsh=NXVzOW53a2lmd29z"
                                target="_blank">@officialkomunikasiunand</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links"></div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Visitors</h4>
                    <div class="row">
                        @foreach ($visitors as $visitor)
                            @if ($visitor->country == '?')
                            @else
                                <div class="col-6 mb-2">
                                    <div class="d-flex gap-2">
                                        <div class="">
                                            <img src="https://flagcdn.com/w40/{{ $visitor->country_code ?? '?' }}.png"
                                                alt="{{ $visitor->country ?? '?' }}" class="me-2"
                                                style="width: 30px; height: 20px; object-fit: cover; border-radius: 2px;">
                                        </div>
                                        <div class="">
                                            {{ $visitor->total ?? '' }}
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright text-center">
        <div class="text-center">
            © Copyright <strong><span>Departemen Ilmu Komunikasi Universitas Andalas</span></strong>. All
            Rights Reserved
        </div>
    </div>
</footer>
