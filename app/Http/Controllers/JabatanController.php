<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends MasterController
{
    public function __construct()
    {
        $this->model = Jabatan::class;
        $this->viewPath = 'admin.pages.jabatan';
    }
}
