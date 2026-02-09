<?php

namespace App\Http\Controllers;

use App\Models\Konsentrasi;
use Illuminate\Http\Request;

class KonsentrasiController extends MasterController
{
    public function __construct()
    {
        $this->model = Konsentrasi::class;
        $this->viewPath = 'admin.pages.konsentrasi';
    }
}
