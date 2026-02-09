<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;

class JurnalController extends MasterController
{
    public function __construct()
    {
        $this->model = Jurnal::class;
        $this->viewPath = 'admin.pages.jurnal';
    }

    public function show($id)
    {
        $jurnal = Jurnal::find($id);
        return view($this->viewPath . '.show', compact('jurnal'));
    }
}
