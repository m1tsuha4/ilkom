<?php

namespace App\Http\Controllers;

use App\Models\Kemahasiswaan;
use Illuminate\Http\Request;

class KemahasiswaanController extends MasterController
{
    public function __construct()
    {
        $this->model = Kemahasiswaan::class;
        $this->viewPath = 'admin.pages.kemahasiswaan';
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
