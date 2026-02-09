<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'image',
        'nip',
        'nidn',
        'tempat_lahir',
        'tanggal_lahir',
        'pangkat_id',
        'golongan_id',
        'jabatan_id',
        'konsentrasi_id',
        'alamat_instansi',
        'telpon',
        'fax',
        'email',
        's1',
        's2',
        's3',
        'kategori',
    ];

    public static function rules($isUpdate = false)
    {
        return [
            'nama' => 'required|string|max:255',
            'image' => $isUpdate ? 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' : 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nip' => 'nullable|string|max:255',
            'nidn' => 'nullable|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'pangkat_id' => 'required|exists:pangkats,id',
            'golongan_id' => 'required|exists:golongans,id',
            'jabatan_id' => 'required|exists:jabatans,id',
            'konsentrasi_id' => 'nullable|exists:konsentrasis,id',
            'alamat_instansi' => 'required|string|max:255',
            'telpon' => 'nullable|string|max:255',
            'fax' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255',
            's1' => 'nullable|string|max:255',
            's2' => 'nullable|string|max:255',
            's3' => 'nullable|string|max:255',
            'kategori' => 'required|string|max:255',
        ];
    }

    public function rBidangkajian()
    {
        return $this->belongsToMany(BidangKajian::class, 'bidang_kajian_details');
    }

    public function rPangkat()
    {
        return $this->belongsTo(Pangkat::class, 'pangkat_id');
    }

    public function rGolongan()
    {
        return $this->belongsTo(Golongan::class, 'golongan_id');
    }

    public function rJabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }

    public function rKonsentrasi()
    {
        return $this->belongsTo(Konsentrasi::class, 'konsentrasi_id');
    }
}
