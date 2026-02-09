<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'visi',
        'misi',
        'tujuan',
        'sasaran_tujuan',
    ];

    public static $rules = [
        'visi' => 'nullable|string',
        'misi' => 'nullable|string',
        'tujuan' => 'nullable|string',
        'sasaran_tujuan' => 'nullable|string',
    ];
}
