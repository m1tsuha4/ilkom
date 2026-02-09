<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends MasterController
{
    public function __construct()
    {
        $this->model = Berita::class;
        $this->viewPath = 'admin.pages.berita';
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
