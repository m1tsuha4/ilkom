<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\AkreditasiDepartemenController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BidangKajianController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\Frontend\AkademikController as FrontendAkademikController;
use App\Http\Controllers\Frontend\BeritaController as FrontendBeritaController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\KemahasiswaanController as FrontendKemahasiswaanController;
use App\Http\Controllers\Frontend\TentangController as FrontendTentangController;
use App\Http\Controllers\GaleriIlkomController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\KalenderAkademikController;
use App\Http\Controllers\KemahasiswaanController;
use App\Http\Controllers\KonsentrasiController;
use App\Http\Controllers\KonsentrasiPenjurusanController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\PangkatController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PostinganBeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramSarjanaController;
use App\Http\Controllers\PublikasiDosenController;
use App\Http\Controllers\SinopsisMatkulController;
use App\Http\Controllers\SopController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\SubKemahasiswaanController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\UnduhanController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('tentang')->group(function () {
    Route::get('/sejarah', [FrontendTentangController::class, 'sejarah'])->name('tentang.sejarah');
    Route::get('/visimisi', [FrontendTentangController::class, 'visimisi'])->name('tentang.visimisi');
    Route::get('/dosen', [FrontendTentangController::class, 'dosen'])->name('tentang.dosen');
    Route::get('/dosen/{id}', [FrontendTentangController::class, 'dosen_detail'])->name('tentang.dosendetail');
    Route::get('/struktur', [FrontendTentangController::class, 'struktur'])->name('tentang.struktur');
});
Route::prefix('berita')->group(function () {
    Route::get('/berita', [FrontendBeritaController::class, 'berita'])->name('berita.berita');
    Route::get('/berita/{id}', [FrontendBeritaController::class, 'berita_detail'])->name('berita.beritadetail');
    Route::get('/agenda', [FrontendBeritaController::class, 'agenda'])->name('berita.agenda');
    Route::get('/agenda/{id}', [FrontendBeritaController::class, 'agenda_detail'])->name('berita.agendadetail');
    Route::get('/publikasi-dosen', [FrontendBeritaController::class, 'publikasi_dosen'])->name('berita.publikasidosen');
    Route::get('/publikasi/{id}', [FrontendBeritaController::class, 'publikasi_detail'])->name('berita.publikasidetail');
});
Route::prefix('akademik')->group(function () {
    Route::get('/kurikulum', [FrontendAkademikController::class, 'kurikulum'])->name('akademik.kurikulum');
    Route::get('/kurikulum-detail/{id}', [FrontendAkademikController::class, 'kurikulum_detail'])->name('akademik.kurikulumdetail');
    Route::get('/akreditasi', [FrontendAkademikController::class, 'akreditasi'])->name('akademik.akreditasi');
    Route::get('/akreditasi-detail/{id}', [FrontendAkademikController::class, 'akreditasi_detail'])->name('akademik.akreditasidetail');
    Route::get('/sop', [FrontendAkademikController::class, 'sop'])->name('akademik.sop');
    Route::get('/sop-detail/{id}', [FrontendAkademikController::class, 'sop_detail'])->name('akademik.sopdetail');
    Route::get('/distribusi-matkul', [FrontendAkademikController::class, 'sinopsis_matkul'])->name('akademik.sinopsismatkul');
    Route::get('/kalender-akademik', [FrontendAkademikController::class, 'kalender_akademik'])->name('akademik.kalenderakademik');
    Route::get('/konsentrasi-penjurusan', [FrontendAkademikController::class, 'konsentrasi_penjurusan'])->name('akademik.konsentrasi-penjurusan');
    Route::get('/program-sarjana', [FrontendAkademikController::class, 'program_sarjana'])->name('akademik.program-sarjana');
    Route::get('/program-sarjana-detail/{id}', [FrontendAkademikController::class, 'program_sarjana_detail'])->name('akademik.programsarjanadetail');
    Route::get('/jurnal', [FrontendAkademikController::class, 'jurnal'])->name('akademik.jurnal');
    Route::get('/jurnal-detail/{id}', [FrontendAkademikController::class, 'jurnal_detail'])->name('akademik.jurnaldetail');
});
Route::prefix('kemahasiswaan')->group(function () {
    Route::get('/alumni', [FrontendKemahasiswaanController::class, 'alumni'])->name('kemahasiswaan.alumni');
    Route::get('/alumni-detail', [FrontendKemahasiswaanController::class, 'alumni_detail'])->name('kemahasiswaan.alumnidetail');
    Route::get('/kemahasiswaan', [FrontendKemahasiswaanController::class, 'kemahasiswaan'])->name('kemahasiswaan.kemahasiswaan');
    Route::get('/kemahasiswaan-detail/{id}', [FrontendKemahasiswaanController::class, 'kemahasiswaan_detail'])->name('kemahasiswaan.kemahasiswaandetail');
});



Route::middleware(['auth', 'verified'])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('admin.pages.dashboard.index');
    // })->name('dashboard');

    Route::get('/visitors', [VisitorController::class, 'index'])->name('visitors.index');
    Route::delete('/visitors/reset', [VisitorController::class, 'destroy'])->name('visitors.reset');

    Route::prefix('visi-misi')->group(function () {
        Route::get('/index', [VisiMisiController::class, 'index'])->name('visimisi.index');
        Route::get('/create', [VisiMisiController::class, 'create'])->name('visimisi.create');
        Route::post('/store', [VisiMisiController::class, 'store'])->name('visimisi.store');
        Route::get('/manage', [VisiMisiController::class, 'manage'])->name('visimisi.manage');
        Route::put('/update-manage/{id}', [VisiMisiController::class, 'updateManage'])->name('visimisi.update.manage');
    });
    Route::prefix('kurikulum')->group(function () {
        Route::get('/index', [KurikulumController::class, 'index'])->name('kurikulum.index');
        Route::get('/show/{id}', [KurikulumController::class, 'show'])->name('kurikulum.show');
        Route::get('/create', [KurikulumController::class, 'create'])->name('kurikulum.create');
        Route::post('/store', [KurikulumController::class, 'store'])->name('kurikulum.store');
        Route::get('/edit/{id}', [KurikulumController::class, 'edit'])->name('kurikulum.edit');
        Route::put('/update/{id}', [KurikulumController::class, 'update'])->name('kurikulum.update');
        Route::delete('/destroy/{id}', [KurikulumController::class, 'destroy'])->name('kurikulum.destroy');
    });
    Route::prefix('program-sarjana')->group(function () {
        Route::get('/index', [ProgramSarjanaController::class, 'index'])->name('programsarjana.index');
        Route::get('/show/{id}', [ProgramSarjanaController::class, 'show'])->name('programsarjana.show');
        Route::get('/create', [ProgramSarjanaController::class, 'create'])->name('programsarjana.create');
        Route::post('/store', [ProgramSarjanaController::class, 'store'])->name('programsarjana.store');
        Route::get('/edit/{id}', [ProgramSarjanaController::class, 'edit'])->name('programsarjana.edit');
        Route::put('/update/{id}', [ProgramSarjanaController::class, 'update'])->name('programsarjana.update');
        Route::delete('/destroy/{id}', [ProgramSarjanaController::class, 'destroy'])->name('programsarjana.destroy');
    });
    Route::prefix('konsentrasi-penjurusan')->group(function () {
        Route::get('/index', [KonsentrasiPenjurusanController::class, 'index'])->name('konsentrasipenjurusan.index');
        Route::get('/create', [KonsentrasiPenjurusanController::class, 'create'])->name('konsentrasipenjurusan.create');
        Route::post('/store', [KonsentrasiPenjurusanController::class, 'store'])->name('konsentrasipenjurusan.store');
        Route::get('/edit/{id}', [KonsentrasiPenjurusanController::class, 'edit'])->name('konsentrasipenjurusan.edit');
        Route::put('/update/{id}', [KonsentrasiPenjurusanController::class, 'update'])->name('konsentrasipenjurusan.update');
        Route::delete('/destroy/{id}', [KonsentrasiPenjurusanController::class, 'destroy'])->name('konsentrasipenjurusan.destroy');
    });
    Route::prefix('jabatan')->group(function () {
        Route::get('/index', [JabatanController::class, 'index'])->name('jabatan.index');
        Route::get('/create', [JabatanController::class, 'create'])->name('jabatan.create');
        Route::post('/store', [JabatanController::class, 'store'])->name('jabatan.store');
        Route::get('/edit/{id}', [JabatanController::class, 'edit'])->name('jabatan.edit');
        Route::put('/update/{id}', [JabatanController::class, 'update'])->name('jabatan.update');
        Route::delete('/destroy/{id}', [JabatanController::class, 'destroy'])->name('jabatan.destroy');
    });
    Route::prefix('pangkat')->group(function () {
        Route::get('/index', [PangkatController::class, 'index'])->name('pangkat.index');
        Route::get('/create', [PangkatController::class, 'create'])->name('pangkat.create');
        Route::post('/store', [PangkatController::class, 'store'])->name('pangkat.store');
        Route::get('/edit/{id}', [PangkatController::class, 'edit'])->name('pangkat.edit');
        Route::put('/update/{id}', [PangkatController::class, 'update'])->name('pangkat.update');
        Route::delete('/destroy/{id}', [PangkatController::class, 'destroy'])->name('pangkat.destroy');
    });
    Route::prefix('golongan')->group(function () {
        Route::get('/index', [GolonganController::class, 'index'])->name('golongan.index');
        Route::get('/create', [GolonganController::class, 'create'])->name('golongan.create');
        Route::post('/store', [GolonganController::class, 'store'])->name('golongan.store');
        Route::get('/edit/{id}', [GolonganController::class, 'edit'])->name('golongan.edit');
        Route::put('/update/{id}', [GolonganController::class, 'update'])->name('golongan.update');
        Route::delete('/destroy/{id}', [GolonganController::class, 'destroy'])->name('golongan.destroy');
    });
    Route::prefix('konsentrasi')->group(function () {
        Route::get('/index', [KonsentrasiController::class, 'index'])->name('konsentrasi.index');
        Route::get('/create', [KonsentrasiController::class, 'create'])->name('konsentrasi.create');
        Route::post('/store', [KonsentrasiController::class, 'store'])->name('konsentrasi.store');
        Route::get('/edit/{id}', [KonsentrasiController::class, 'edit'])->name('konsentrasi.edit');
        Route::put('/update/{id}', [KonsentrasiController::class, 'update'])->name('konsentrasi.update');
        Route::delete('/destroy/{id}', [KonsentrasiController::class, 'destroy'])->name('konsentrasi.destroy');
    });
    Route::prefix('bidang-kajian')->group(function () {
        Route::get('/index', [BidangKajianController::class, 'index'])->name('bidangkajian.index');
        Route::get('/create', [BidangKajianController::class, 'create'])->name('bidangkajian.create');
        Route::post('/store', [BidangKajianController::class, 'store'])->name('bidangkajian.store');
        Route::get('/edit/{id}', [BidangKajianController::class, 'edit'])->name('bidangkajian.edit');
        Route::put('/update/{id}', [BidangKajianController::class, 'update'])->name('bidangkajian.update');
        Route::delete('/destroy/{id}', [BidangKajianController::class, 'destroy'])->name('bidangkajian.destroy');
    });
    Route::prefix('dosen')->group(function () {
        Route::get('/index', [DosenController::class, 'index'])->name('dosen.index');
        Route::get('/create', [DosenController::class, 'create'])->name('dosen.create');
        Route::post('/store', [DosenController::class, 'store'])->name('dosen.store');
        Route::get('/edit/{id}', [DosenController::class, 'edit'])->name('dosen.edit');
        Route::put('/update/{id}', [DosenController::class, 'update'])->name('dosen.update');
        Route::delete('/destroy/{id}', [DosenController::class, 'destroy'])->name('dosen.destroy');
    });
    Route::prefix('fakultas')->group(function () {
        Route::get('/index', [FakultasController::class, 'index'])->name('fakultas.index');
        Route::post('/create', [FakultasController::class, 'create'])->name('fakultas.create');
        Route::post('/store', [FakultasController::class, 'store'])->name('fakultas.store');
        Route::get('/manage', [FakultasController::class, 'manage'])->name('fakultas.manage');
        Route::put('/update-manage/{id}', [FakultasController::class, 'updateManage'])->name('fakultas.update.manage');
    });
    Route::prefix('galeri-ilkom')->group(function () {
        Route::get('/index', [GaleriIlkomController::class, 'index'])->name('galeriilkom.index');
        Route::post('/store', [GaleriIlkomController::class, 'store'])->name('galeriilkom.store');
        Route::post('/update/{id}', [GaleriIlkomController::class, 'update'])->name('galeriilkom.update');
        Route::post('/destroy/{id}', [GaleriIlkomController::class, 'destroy'])->name('galeriilkom.destroy');
    });
    Route::prefix('tentang')->group(function () {
        Route::get('/index', [TentangController::class, 'index'])->name('tentang.index');
        Route::post('/store', [TentangController::class, 'store'])->name('tentang.store');
        Route::post('/update/{id}', [TentangController::class, 'update'])->name('tentang.update');
        Route::post('/destroy/{id}', [TentangController::class, 'destroy'])->name('tentang.destroy');
    });
    Route::prefix('struktur-organisasi')->group(function () {
        Route::get('/create', [StrukturOrganisasiController::class, 'create'])->name('strukturorganisasi.create');
        Route::post('/store', [StrukturOrganisasiController::class, 'manageStore'])->name('strukturorganisasi.store');
        Route::get('/manage', [StrukturOrganisasiController::class, 'manage'])->name('strukturorganisasi.manage');
        Route::get('/edit/{id}', [StrukturOrganisasiController::class, 'edit'])->name('strukturorganisasi.edit');
        Route::put('/update-manage/{id}', [StrukturOrganisasiController::class, 'manageUpdate'])->name('strukturorganisasi.update.manage');
    });
    Route::prefix('akademik')->group(function () {
        Route::get('/index', [AkademikController::class, 'index'])->name('akademik.index');
        Route::post('/store', [AkademikController::class, 'store'])->name('akademik.store');
        Route::post('/update/{id}', [AkademikController::class, 'update'])->name('akademik.update');
        Route::post('/destroy/{id}', [AkademikController::class, 'destroy'])->name('akademik.destroy');
    });
    Route::prefix('berita')->group(function () {
        Route::get('/index', [BeritaController::class, 'index'])->name('berita.index');
        Route::post('/store', [BeritaController::class, 'store'])->name('berita.store');
        Route::post('/update/{id}', [BeritaController::class, 'update'])->name('berita.update');
        Route::post('/destroy/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    });
    Route::prefix('kemahasiswaan')->group(function () {
        Route::get('/index', [KemahasiswaanController::class, 'index'])->name('kemahasiswaan.index');
        Route::post('/store', [KemahasiswaanController::class, 'store'])->name('kemahasiswaan.store');
        Route::post('/update/{id}', [KemahasiswaanController::class, 'update'])->name('kemahasiswaan.update');
        Route::post('/destroy/{id}', [KemahasiswaanController::class, 'destroy'])->name('kemahasiswaan.destroy');
    });
    Route::prefix('akreditasi-departemen')->group(function () {
        Route::get('/index', [AkreditasiDepartemenController::class, 'index'])->name('akreditasidepartemen.index');
        Route::get('/show/{id}', [AkreditasiDepartemenController::class, 'show'])->name('akreditasidepartemen.show');
        Route::get('/create', [AkreditasiDepartemenController::class, 'create'])->name('akreditasidepartemen.create');
        Route::post('/store', [AkreditasiDepartemenController::class, 'store'])->name('akreditasidepartemen.store');
        Route::get('/edit/{id}', [AkreditasiDepartemenController::class, 'edit'])->name('akreditasidepartemen.edit');
        Route::put('/update/{id}', [AkreditasiDepartemenController::class, 'update'])->name('akreditasidepartemen.update');
        Route::delete('/destroy/{id}', [AkreditasiDepartemenController::class, 'destroy'])->name('akreditasidepartemen.destroy');
    });
    Route::prefix('sinopsis-matkul')->group(function () {
        Route::get('/index', [SinopsisMatkulController::class, 'index'])->name('sinopsismatkul.index');
        Route::get('/create', [SinopsisMatkulController::class, 'create'])->name('sinopsismatkul.create');
        Route::post('/store', [SinopsisMatkulController::class, 'store'])->name('sinopsismatkul.store');
        Route::get('/edit/{id}', [SinopsisMatkulController::class, 'edit'])->name('sinopsismatkul.edit');
        Route::put('/update/{id}', [SinopsisMatkulController::class, 'update'])->name('sinopsismatkul.update');
        Route::delete('/destroy/{id}', [SinopsisMatkulController::class, 'destroy'])->name('sinopsismatkul.destroy');
    });
    Route::prefix('kalender-akademik')->group(function () {
        Route::get('/index', [KalenderAkademikController::class, 'index'])->name('kalenderakademik.index');
        Route::get('/create', [KalenderAkademikController::class, 'create'])->name('kalenderakademik.create');
        Route::post('/store', [KalenderAkademikController::class, 'store'])->name('kalenderakademik.store');
        Route::get('/edit/{id}', [KalenderAkademikController::class, 'edit'])->name('kalenderakademik.edit');
        Route::put('/update/{id}', [KalenderAkademikController::class, 'update'])->name('kalenderakademik.update');
        Route::delete('/destroy/{id}', [KalenderAkademikController::class, 'destroy'])->name('kalenderakademik.destroy');
    });
    Route::prefix('pengumuman')->group(function () {
        Route::get('/index', [PengumumanController::class, 'index'])->name('pengumuman.index');
        Route::post('/store', [PengumumanController::class, 'store'])->name('pengumuman.store');
        Route::put('/update/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update');
        Route::delete('/destroy/{id}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');
    });
    Route::prefix('agenda')->group(function () {
        Route::get('/index', [AgendaController::class, 'index'])->name('agenda.index');
        Route::get('/show/{id}', [AgendaController::class, 'show'])->name('agenda.show');
        Route::get('/create', [AgendaController::class, 'create'])->name('agenda.create');
        Route::post('/store', [AgendaController::class, 'store'])->name('agenda.store');
        Route::get('/edit/{id}', [AgendaController::class, 'edit'])->name('agenda.edit');
        Route::put('/update/{id}', [AgendaController::class, 'update'])->name('agenda.update');
        Route::delete('/destroy/{id}', [AgendaController::class, 'destroy'])->name('agenda.destroy');
    });
    Route::prefix('postingan-berita')->group(function () {
        Route::get('/index', [PostinganBeritaController::class, 'index'])->name('postinganberita.index');
        Route::get('/show/{id}', [PostinganBeritaController::class, 'show'])->name('postinganberita.show');
        Route::get('/create', [PostinganBeritaController::class, 'create'])->name('postinganberita.create');
        Route::post('/store', [PostinganBeritaController::class, 'store'])->name('postinganberita.store');
        Route::get('/edit/{id}', [PostinganBeritaController::class, 'edit'])->name('postinganberita.edit');
        Route::put('/update/{id}', [PostinganBeritaController::class, 'update'])->name('postinganberita.update');
        Route::delete('/destroy/{id}', [PostinganBeritaController::class, 'destroy'])->name('postinganberita.destroy');
    });
    Route::prefix('publikasi-dosen')->group(function () {
        Route::get('/index', [PublikasiDosenController::class, 'index'])->name('publikasidosen.index');
        Route::get('/show/{id}', [PublikasiDosenController::class, 'show'])->name('publikasidosen.show');
        Route::get('/create', [PublikasiDosenController::class, 'create'])->name('publikasidosen.create');
        Route::post('/store', [PublikasiDosenController::class, 'store'])->name('publikasidosen.store');
        Route::get('/edit/{id}', [PublikasiDosenController::class, 'edit'])->name('publikasidosen.edit');
        Route::put('/update/{id}', [PublikasiDosenController::class, 'update'])->name('publikasidosen.update');
        Route::delete('/destroy/{id}', [PublikasiDosenController::class, 'destroy'])->name('publikasidosen.destroy');
    });
    Route::prefix('sub-kemahasiswaan')->group(function () {
        Route::get('/index', [SubKemahasiswaanController::class, 'index'])->name('subkemahasiswaan.index');
        Route::get('/show/{id}', [SubKemahasiswaanController::class, 'show'])->name('subkemahasiswaan.show');
        Route::get('/create', [SubKemahasiswaanController::class, 'create'])->name('subkemahasiswaan.create');
        Route::post('/store', [SubKemahasiswaanController::class, 'store'])->name('subkemahasiswaan.store');
        Route::get('/edit/{id}', [SubKemahasiswaanController::class, 'edit'])->name('subkemahasiswaan.edit');
        Route::put('/update/{id}', [SubKemahasiswaanController::class, 'update'])->name('subkemahasiswaan.update');
        Route::delete('/destroy/{id}', [SubKemahasiswaanController::class, 'destroy'])->name('subkemahasiswaan.destroy');
    });
    Route::prefix('alumni')->group(function () {
        Route::get('/index', [AlumniController::class, 'index'])->name('alumni.index');
        Route::post('/store', [AlumniController::class, 'store'])->name('alumni.store');
        Route::put('/update/{id}', [AlumniController::class, 'update'])->name('alumni.update');
        Route::delete('/destroy/{id}', [AlumniController::class, 'destroy'])->name('alumni.destroy');
    });
    Route::prefix('unduhan')->group(function () {
        Route::get('/index', [UnduhanController::class, 'index'])->name('unduhan.index');
        Route::post('/store', [UnduhanController::class, 'store'])->name('unduhan.store');
        Route::put('/update/{id}', [UnduhanController::class, 'update'])->name('unduhan.update');
        Route::delete('/destroy/{id}', [UnduhanController::class, 'destroy'])->name('unduhan.destroy');
    });
    Route::prefix('sop')->group(function () {
        Route::get('/index', [SopController::class, 'index'])->name('sop.index');
        Route::get('/show/{id}', [SopController::class, 'show'])->name('sop.show');
        Route::get('/create', [SopController::class, 'create'])->name('sop.create');
        Route::post('/store', [SopController::class, 'store'])->name('sop.store');
        Route::get('/edit/{id}', [SopController::class, 'edit'])->name('sop.edit');
        Route::put('/update/{id}', [SopController::class, 'update'])->name('sop.update');
        Route::delete('/destroy/{id}', [SopController::class, 'destroy'])->name('sop.destroy');
    });
    Route::prefix('jurnal')->group(function () {
        Route::get('/index', [JurnalController::class, 'index'])->name('jurnal.index');
        Route::get('/show/{id}', [JurnalController::class, 'show'])->name('jurnal.show');
        Route::get('/create', [JurnalController::class, 'create'])->name('jurnal.create');
        Route::post('/store', [JurnalController::class, 'store'])->name('jurnal.store');
        Route::get('/edit/{id}', [JurnalController::class, 'edit'])->name('jurnal.edit');
        Route::put('/update/{id}', [JurnalController::class, 'update'])->name('jurnal.update');
        Route::delete('/destroy/{id}', [JurnalController::class, 'destroy'])->name('jurnal.destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
