<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;

class TentangController extends MasterController
{
    public function __construct()
    {
        $this->model = Tentang::class;
        $this->viewPath = 'admin.pages.tentang';
    }

    public function create()
    {
        abort(404);
    }

    public function edit($id)
    {
        abort(404);
    }
}
