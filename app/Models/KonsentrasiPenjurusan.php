<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsentrasiPenjurusan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'link_pdf',
    ];

    public static $rules = [
        'nama' => 'required|string|max:255',
        'link_pdf' => 'required|string|max:255',
    ];
}
