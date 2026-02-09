<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;

class GolonganController extends MasterController
{
    public function __construct()
    {
        $this->model = Golongan::class;
        $this->viewPath = 'admin.pages.golongan';
    }
}
