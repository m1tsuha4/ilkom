<?php

namespace App\Http\Controllers;

use App\Models\GaleriIlkom;
use Illuminate\Http\Request;

class GaleriIlkomController extends MasterController
{
    public function __construct()
    {
        $this->model = GaleriIlkom::class;
        $this->viewPath = 'admin.pages.galeriilkom';
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
