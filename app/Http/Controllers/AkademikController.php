<?php

namespace App\Http\Controllers;

use App\Models\Akadem;
use Illuminate\Http\Request;

class AkademikController extends MasterController
{
    public function __construct()
    {
        $this->model = Akadem::class;
        $this->viewPath = 'admin.pages.akademik';
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
