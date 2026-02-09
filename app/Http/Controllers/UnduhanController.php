<?php

namespace App\Http\Controllers;

use App\Models\Unduhan;
use Illuminate\Http\Request;

class UnduhanController extends MasterController
{
    public function __construct()
    {
        $this->model = Unduhan::class;
        $this->viewPath = 'admin.pages.unduhan';
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
