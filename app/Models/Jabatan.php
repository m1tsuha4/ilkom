<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jabatan',
    ];

    public static $rules = [
        'jabatan' => 'required|string|max:255',
    ];
}
