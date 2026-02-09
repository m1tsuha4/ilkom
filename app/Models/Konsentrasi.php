<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsentrasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'konsentrasi',
    ];

    public static $rules = [
        'konsentrasi' => 'required|string|max:255',
    ];
}
