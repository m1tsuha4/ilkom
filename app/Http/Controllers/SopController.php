<?php

namespace App\Http\Controllers;

use App\Models\Sop;
use Illuminate\Http\Request;

class SopController extends MasterController
{
    public function __construct()
    {
        $this->model = Sop::class;
        $this->viewPath = 'admin.pages.sop';
    }

    public function show($id)
    {
        $sop = Sop::find($id);
        return view($this->viewPath . '.show', compact('sop'));
    }
}
