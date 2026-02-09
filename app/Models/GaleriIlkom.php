<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriIlkom extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kegiatan',
        'image',
    ];

    public static $rules = [
        'nama_kegiatan' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];
}
