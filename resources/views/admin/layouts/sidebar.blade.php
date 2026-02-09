<div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{ route('fakultas.index') }}" class="logo text-center logo-light mt-2">
        <span class="logo-lg">
            <img src="{{ asset('dist/images/logo.svg') }}" alt="">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('dist/images/logo_sm.svg') }}" alt="">
        </span>
    </a>

    <div class="h-100 mt-4" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            {{-- <li class="side-nav-item">
                <a href="{{ route('dashboard') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span class="badge bg-success float-end">4</span>
                    <span> Dashboards </span>
                </a>
            </li> --}}

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                    aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-home"></i>
                    <span> Landing Page </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('fakultas.index') }}">Data Fakultas</a>
                        </li>
                        <li>
                            <a href="{{ route('galeriilkom.index') }}">Galeri Ilmu Komunikasi</a>
                        </li>
                        <li>
                            <a href="{{ route('visitors.index') }}">Jumlah Pengunjung</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTentang" id="tentangLink" aria-expanded="false"
                    aria-controls="sidebarTentang" class="side-nav-link">
                    <i class="uil-info-circle"></i>
                    <span> Tentang </span>
                    <span class="menu-arrow"></span>
                </a>

                <!-- Collapse menu -->
                <div class="collapse" id="sidebarTentang">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('visimisi.index') }}">Visi & Misi</a>
                        </li>
                        <li>
                            <a href="{{ route('strukturorganisasi.manage') }}">Struktur Organisasi</a>
                        </li>
                        <li>
                            <a href="{{ route('dosen.index') }}">Dosen</a>
                        </li>
                        @foreach ($tentangSubmenu as $tentang)
                            <li>
                                <a href="{{ $tentang->link ?? '' }}" target="_blank">{{ $tentang->judul ?? '' }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarAkademik" id="akademikLink" aria-expanded="false"
                    aria-controls="sidebarAkademik" class="side-nav-link">
                    <i class="uil-book-open"></i>
                    <span> Akademik </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarAkademik">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('kurikulum.index') }}">Kurikulum</a>
                        </li>
                        <li>
                            <a href="{{ route('akreditasidepartemen.index') }}">Akreditasi Departemen</a>
                        </li>
                        <li>
                            <a href="{{ route('sop.index') }}">SOP</a>
                        </li>
                        <li>
                            <a href="{{ route('sinopsismatkul.index') }}">Distribusi Mata Kuliah</a>
                        </li>
                        <li>
                            <a href="{{ route('kalenderakademik.index') }}">Kalender Akademik</a>
                        </li>
                        <li>
                            <a href="{{ route('konsentrasipenjurusan.index') }}">Konsentrasi Penjurusan</a>
                        </li>
                        <li>
                            <a href="{{ route('programsarjana.index') }}">Program Sarjana</a>
                        </li>
                        <li>
                            <a href="{{ route('jurnal.index') }}">Jurnal</a>
                        </li>
                        @foreach ($akademikSubmenu as $akademik)
                            <li>
                                <a href="{{ $akademik->link ?? '' }}" target="_blank">{{ $akademik->judul ?? '' }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarBerita" id="beritaLink" aria-expanded="false"
                    aria-controls="sidebarBerita" class="side-nav-link">
                    <i class="uil-comment-dots"></i>
                    <span> Berita </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarBerita">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('pengumuman.index') }}">Pengumuman</a>
                        </li>
                        <li>
                            <a href="{{ route('agenda.index') }}">Agenda</a>
                        </li>
                        <li>
                            <a href="{{ route('postinganberita.index') }}">Postingan Berita</a>
                        </li>
                        <li>
                            <a href="{{ route('publikasidosen.index') }}">Publikasi Dosen</a>
                        </li>
                        @foreach ($beritaSubmenu as $berita)
                            <li>
                                <a href="{{ $berita->link ?? '' }}" target="_blank">{{ $berita->judul ?? '' }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarKemahasiswaan" id="kemahasiswaanLink" aria-expanded="false"
                    aria-controls="sidebarKemahasiswaan" class="side-nav-link">
                    <i class="uil-users-alt"></i>
                    <span> Kemahasiswaan </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarKemahasiswaan">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('alumni.index') }}">Alumni</a>
                        </li>
                        <li>
                            <a href="{{ route('subkemahasiswaan.index') }}">Kemahasiswaan</a>
                        </li>
                        @foreach ($kemahasiswaanSubmenu as $kemahasiswaan)
                            <li>
                                <a href="{{ $kemahasiswaan->link ?? '' }}"
                                    target="_blank">{{ $kemahasiswaan->judul ?? '' }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#master" aria-expanded="false" aria-controls="master"
                    class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Data Master </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="master">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('jabatan.index') }}">Jabatan</a>
                        </li>
                        <li>
                            <a href="{{ route('pangkat.index') }}">Pangkat</a>
                        </li>
                        <li>
                            <a href="{{ route('golongan.index') }}">Golongan</a>
                        </li>
                        <li>
                            <a href="{{ route('konsentrasi.index') }}">Konsentrasi</a>
                        </li>
                        <li>
                            <a href="{{ route('bidangkajian.index') }}">Bidang Kajian</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('unduhan.index') }}" class="side-nav-link">
                    <i class="uil-cloud-download"></i>
                    <span> Unduhan & Tautan</span>
                </a>
            </li>
        </ul>
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Fungsi untuk mengatur logika collapse dan navigasi
            function setupMenu(menuId, linkId, route) {
                var collapseElement = document.getElementById(menuId);
                var linkElement = document.getElementById(linkId);

                // Buka collapse jika URL cocok dengan route
                if (window.location.href.includes(route)) {
                    var collapseInstance = new bootstrap.Collapse(collapseElement, {
                        toggle: true
                    });
                    collapseElement.classList.add('show');
                    linkElement.setAttribute('aria-expanded', 'true');
                }

                // Tangani klik pada link
                linkElement.addEventListener('click', function(event) {
                    event.preventDefault();
                    window.location.href = route;

                    setTimeout(function() {
                        var collapseInstance = new bootstrap.Collapse(collapseElement, {
                            toggle: true
                        });
                    }, 100);
                });
            }

            // Atur menu "Tentang"
            setupMenu('sidebarTentang', 'tentangLink', '{{ route('tentang.index') }}');

            // Atur menu "Akademik"
            setupMenu('sidebarAkademik', 'akademikLink', '{{ route('akademik.index') }}');

            // Atur menu "Berita"
            setupMenu('sidebarBerita', 'beritaLink', '{{ route('berita.index') }}');

            // Atur menu "Kemahasiswaan"
            setupMenu('sidebarKemahasiswaan', 'kemahasiswaanLink', '{{ route('kemahasiswaan.index') }}');
        });
    </script>


</div>
