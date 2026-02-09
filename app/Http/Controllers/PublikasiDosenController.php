<?php

namespace App\Http\Controllers;

use App\Models\PublikasiDosen;
use Illuminate\Http\Request;

class PublikasiDosenController extends MasterController
{
    public function __construct()
    {
        $this->model = PublikasiDosen::class;
        $this->viewPath = 'admin.pages.publikasidosen';
    }

    public function show($id)
    {
        $publikasidosen = PublikasiDosen::find($id);
        return view($this->viewPath . '.show', compact('publikasidosen'));
    }
}
