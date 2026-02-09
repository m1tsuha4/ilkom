<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangKajianDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'bidang_kajian_id',
        'dosen_id',
    ];

    public function rDosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    public function rBidangKajian()
    {
        return $this->belongsTo(BidangKajian::class);
    }
}
