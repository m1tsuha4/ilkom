<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinopsisMatkul extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'pdf',
    ];

    public static $rules = [
        'judul' => 'required|string|max:255',
        'pdf' => 'required|file|mimes:pdf|max:5120',
    ];
}
