<?php

namespace App\Http\Controllers;

use App\Models\BidangKajian;
use Illuminate\Http\Request;

class BidangKajianController extends MasterController
{
    public function __construct()
    {
        $this->model = BidangKajian::class;
        $this->viewPath = 'admin.pages.bidangkajian';
    }
}
