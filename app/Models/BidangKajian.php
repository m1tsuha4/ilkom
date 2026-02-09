<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangKajian extends Model
{
    use HasFactory;

    protected $fillable = [
        'bidang_kajian',
    ];

    public static $rules = [
        'bidang_kajian' => 'required|string|max:255',
    ];

    public function rDosen()
    {
        return $this->belongsToMany(Dosen::class, 'bidang_kajian_details');
    }
}
