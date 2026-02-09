<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends MasterController
{
    public function __construct()
    {
        $this->model = Alumni::class;
        $this->viewPath = 'admin.pages.alumni';
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
