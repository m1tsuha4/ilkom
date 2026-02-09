<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalFunction;
use App\Models\BidangKajian;
use App\Models\Dosen;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\Konsentrasi;
use App\Models\Pangkat;
use Illuminate\Http\Request;

class DosenController extends MasterController
{
    public function __construct()
    {
        $this->model = Dosen::class;
        $this->viewPath = 'admin.pages.dosen';
        $this->withRelations = ['rPangkat', 'rGolongan', 'rJabatan', 'rKonsentrasi', 'rbidangkajian'];
    }

    public function create()
    {
        $pangkats = Pangkat::all();
        $golongans = Golongan::all();
        $jabatans = Jabatan::all();
        $konsentrasis = Konsentrasi::all();
        $bidangkajians = BidangKajian::all();
        return view($this->viewPath . '.create', compact('pangkats', 'golongans', 'jabatans', 'konsentrasis', 'bidangkajians'));
    }

    public function store(Request $request)
    {
        $imagePath = 'dosen';
        $validated = $request->validate($this->model::rules(false));
        $dosen = new Dosen();

        if ($request->hasFile('image')) {
            $imageName = GlobalFunction::saveImage($request->file('image'), uniqid(), $imagePath);
            $validated['image'] = $imageName;
        }

        $dosen->nama = $request->input('nama');
        $dosen->image = $imageName;
        $dosen->nip = $request->input('nip');
        $dosen->nidn = $request->input('nidn');
        $dosen->tempat_lahir = $request->input('tempat_lahir');
        $dosen->tanggal_lahir = $request->input('tanggal_lahir');
        $dosen->pangkat_id = $request->input('pangkat_id');
        $dosen->golongan_id = $request->input('golongan_id');
        $dosen->jabatan_id = $request->input('jabatan_id');
        $dosen->konsentrasi_id = $request->input('konsentrasi_id') ?? null;

        $dosen->alamat_instansi = $request->input('alamat_instansi');
        $dosen->telpon = $request->input('telpon');
        $dosen->fax = $request->input('fax');
        $dosen->email = $request->input('email');
        $dosen->kategori = $request->input('kategori');

        $s1Data = [
            $request->input('jurusan_s1'),
            $request->input('perguruan_tinggi_s1'),
            $request->input('tahun_s1')
        ];
        $dosen->s1 = implode(', ', $s1Data);

        $s2Data = [
            $request->input('jurusan_s2'),
            $request->input('perguruan_tinggi_s2'),
            $request->input('tahun_s2')
        ];
        $dosen->s2 = implode(', ', $s2Data);

        $s3Data = [
            $request->input('jurusan_s3'),
            $request->input('perguruan_tinggi_s3'),
            $request->input('tahun_s3')
        ];
        $dosen->s3 = implode(', ', $s3Data);

        $dosen->save();

        if ($request->has('bidang_kajian')) {
            $bidangkajian = $request->input('bidang_kajian');
            $dosen->rBidangkajian()->attach($bidangkajian);
        }

        return redirect()->route('dosen.index')->with('success', 'Data created successfully');
    }

    public function edit($id)
    {

        $item = Dosen::findOrFail($id);
        $pangkats = Pangkat::all();
        $golongans = Golongan::all();
        $jabatans = Jabatan::all();
        $konsentrasis = Konsentrasi::all();
        $bidangkajians = BidangKajian::all();

        // Pisahkan data S1
        $s1Data = explode(', ', $item->s1);
        $jurusan_s1 = $s1Data[0] ?? '';
        $perguruan_tinggi_s1 = $s1Data[1] ?? '';
        $tahun_s1 = $s1Data[2] ?? '';

        // Pisahkan data S2
        $s2Data = explode(', ', $item->s2);
        $jurusan_s2 = $s2Data[0] ?? '';
        $perguruan_tinggi_s2 = $s2Data[1] ?? '';
        $tahun_s2 = $s2Data[2] ?? '';

        // Pisahkan data S3
        $s3Data = explode(', ', $item->s3);
        $jurusan_s3 = $s3Data[0] ?? '';
        $perguruan_tinggi_s3 = $s3Data[1] ?? '';
        $tahun_s3 = $s3Data[2] ?? '';

        return view($this->viewPath . '.edit', compact('item', 'pangkats', 'golongans', 'jabatans', 'konsentrasis', 'bidangkajians', 'jurusan_s1', 'perguruan_tinggi_s1', 'tahun_s1', 'jurusan_s2', 'perguruan_tinggi_s2', 'tahun_s2', 'jurusan_s3', 'perguruan_tinggi_s3', 'tahun_s3'));
    }

    public function update(Request $request, $id)
    {
        $imagePath = 'dosen';
        $validated = $request->validate($this->model::rules(true));
        $dosen = Dosen::findOrFail($id);
        $dosen->nama = $request->input('nama');

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($dosen->image) {
                GlobalFunction::deleteImage($dosen->image, $imagePath);
            }

            // Simpan gambar baru
            $imageName = GlobalFunction::saveImage($request->file('image'), uniqid(), $imagePath);
            $validated['image'] = $imageName;
            $dosen->image = $imageName;
        }

        $dosen->nip = $request->input('nip');
        $dosen->nidn = $request->input('nidn');
        $dosen->tempat_lahir = $request->input('tempat_lahir');
        $dosen->tanggal_lahir = $request->input('tanggal_lahir');
        $dosen->pangkat_id = $request->input('pangkat_id');
        $dosen->golongan_id = $request->input('golongan_id');
        $dosen->jabatan_id = $request->input('jabatan_id');

        $dosen->kategori = $request->input('kategori');

        if ($request->has('konsentrasi_id')) {
            if ($request->input('kategori') == 'Kadep' || $request->input('kategori') == 'Dosen') {
                $dosen->konsentrasi_id = $request->input('konsentrasi_id');
            } else {
                $dosen->konsentrasi_id = 1;
            }
        }
        $dosen->alamat_instansi = $request->input('alamat_instansi');
        $dosen->telpon = $request->input('telpon');
        $dosen->fax = $request->input('fax');
        $dosen->email = $request->input('email');

        $s1Data = [
            $request->input('jurusan_s1'),
            $request->input('perguruan_tinggi_s1'),
            $request->input('tahun_s1')
        ];
        $dosen->s1 = implode(', ', $s1Data);

        $s2Data = [
            $request->input('jurusan_s2'),
            $request->input('perguruan_tinggi_s2'),
            $request->input('tahun_s2')
        ];
        $dosen->s2 = implode(', ', $s2Data);

        $s3Data = [
            $request->input('jurusan_s3'),
            $request->input('perguruan_tinggi_s3'),
            $request->input('tahun_s3')
        ];
        $dosen->s3 = implode(', ', $s3Data);

        $dosen->save();

        if ($request->has('bidang_kajian')) {
            if ($request->input('kategori') == 'Dosen' || $request->input('kategori') == 'Kadep') {
                $bidangkajian = $request->input('bidang_kajian');
                $dosen->rBidangkajian()->sync($bidangkajian);
            } else {
                $dosen->rBidangkajian()->detach();
            }
        } else {
            $dosen->rBidangkajian()->detach();
        }

        return redirect()->route('dosen.index')->with('success', 'Data updated successfully');
    }
}
