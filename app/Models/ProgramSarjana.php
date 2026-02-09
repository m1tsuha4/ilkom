<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramSarjana extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'judul',
        'isi_halaman',
    ];

    public static $rules = [
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'judul' => 'required|string|max:255',
        'isi_halaman' => 'nullable|string',
    ];
}
