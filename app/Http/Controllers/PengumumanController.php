<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends MasterController
{
    public function __construct()
    {
        $this->model = Pengumuman::class;
        $this->viewPath = 'admin.pages.pengumuman';
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
