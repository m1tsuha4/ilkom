<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akadem extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'link',
    ];

    public static $rules = [
        'judul' => 'required|string|max:255',
        'link' => 'required|string|max:255',
    ];
}
