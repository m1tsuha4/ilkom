<?php

namespace App\Http\Controllers;

use App\Models\KonsentrasiPenjurusan;
use Illuminate\Http\Request;

class KonsentrasiPenjurusanController extends MasterController
{
    public function __construct()
    {
        $this->model = KonsentrasiPenjurusan::class;
        $this->viewPath = 'admin.pages.konsentrasipenjurusan';
    }
}
