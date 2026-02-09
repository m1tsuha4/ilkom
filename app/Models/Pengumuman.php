<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'link',
    ];

    public static $rules = [
        'nama' => 'required|string|max:255',
        'link' => 'required|string',
    ];
}
