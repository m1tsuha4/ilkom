<?php

namespace App\Http\Controllers;

use App\Models\SubKemahasiswaan;
use Illuminate\Http\Request;

class SubKemahasiswaanController extends MasterController
{
    public function __construct()
    {
        $this->model = SubKemahasiswaan::class;
        $this->viewPath = 'admin.pages.subkemahasiswaan';
    }

    public function show($id)
    {
        $subkemahasiswaan = SubKemahasiswaan::find($id);
        return view($this->viewPath . '.show', compact('subkemahasiswaan'));
    }
}
