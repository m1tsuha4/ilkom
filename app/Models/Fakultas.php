<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $fillable = [
        'jml_mahasiswa',
        'jml_dosen',
        'jml_publikasi',
        'jml_alumni',
    ];

    public static $rules = [
        'jml_mahasiswa' => 'nullable',
        'jml_dosen' => 'nullable',
        'jml_publikasi' => 'nullable',
        'jml_alumni' => 'nullable',
    ];
}
