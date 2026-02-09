<header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('dist_frontend/assets/img/logo.png') }}" alt="Ilmu Komunikasi" />
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li class="dropdown">
                    <a href="#"><span>Tentang</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('tentang.sejarah') }}">Sejarah</a></li>
                        <li><a href="{{ route('tentang.visimisi') }}">Visi Misi</a></li>
                        <li><a href="{{ route('tentang.dosen') }}">Dosen dan Staff</a></li>
                        <li><a href="{{ route('tentang.struktur') }}">Struktur Organisasi</a></li>
                        @foreach ($tentangSubmenu as $tentang)
                            <li>
                                <a href="{{ $tentang->link ?? '' }}" target="_blank">{{ $tentang->judul ?? '' }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><span>Berita</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('berita.berita') }}">Berita</a></li>
                        <li><a href="{{ route('berita.agenda') }}">Agenda & Pengumuman</a></li>
                        <li><a href="{{ route('berita.publikasidosen') }}">Publikasi Dosen</a></li>
                        @foreach ($beritaSubmenu as $berita)
                            <li>
                                <a href="{{ $berita->link ?? '' }}" target="_blank">{{ $berita->judul ?? '' }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><span>Akademik</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('akademik.kurikulum') }}">Kurikulum</a></li>
                        <li><a href="{{ route('akademik.akreditasi') }}">Akreditasi Departemen</a></li>
                        <li><a href="{{ route('akademik.sop') }}">SOP</a></li>
                        <li>
                            <a href="{{ route('akademik.sinopsismatkul') }}">
                                Distribusi Mata Kuliah
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('akademik.kalenderakademik') }}">
                                Kalender Akademik
                            </a>
                        </li>
                        <li><a href="{{ route('akademik.konsentrasi-penjurusan') }}">Konsentrasi Penjurusan</a></li>
                        <li><a href="{{ route('akademik.program-sarjana') }}">Program Sarjana</a></li>
                        <li><a href="{{ route('akademik.jurnal') }}">Jurnal</a></li>
                        @foreach ($akademikSubmenu as $akademik)
                            <li>
                                <a href="{{ $akademik->link ?? '' }}" target="_blank">{{ $akademik->judul ?? '' }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><span>Kemahasiswaan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('kemahasiswaan.alumni') }}">Alumni</a></li>
                        <li><a href="{{ route('kemahasiswaan.kemahasiswaan') }}">Lembaga Kemahasiswaan</a></li>
                        @foreach ($kemahasiswaanSubmenu as $kemahasiswaan)
                            <li>
                                <a href="{{ $kemahasiswaan->link ?? '' }}"
                                    target="_blank">{{ $kemahasiswaan->judul ?? '' }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><span>Unduhan & Tautan</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="https://sso.unand.ac.id" target="_blank">Portal Akademik</a></li>
                        <li><a href="https://pustaka.unand.ac.id" target="_blank">Pustaka Unand</a></li>
                        <li><a href="http://simtb.lc.unand.ac.id" target="_blank">Pusat Bahasa</a></li>
                        <li><a href="https://soc.ilearn.unand.ac.id" target="_blank">Ilearn</a></li>
                        <li><a href="http://scholar.unand.ac.id" target="_blank">E-Skripsi</a></li>
                        @foreach ($unduhanSubmenu as $unduhan)
                            <li>
                                <a href="{{ $unduhan->link ?? '' }}" target="_blank">{{ $unduhan->nama ?? '' }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <!-- <li><a href="contact.html">Contact</a></li> -->
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
