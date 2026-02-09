<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    use HasFactory;

    protected $fillable = [
        'pangkat',
    ];

    public static $rules = [
        'pangkat' => 'required|string|max:255',
    ];
}
