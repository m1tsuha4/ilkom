<?php

namespace App\Http\Controllers;

use App\Models\Pangkat;
use Illuminate\Http\Request;

class PangkatController extends MasterController
{
    public function __construct()
    {
        $this->model = Pangkat::class;
        $this->viewPath = 'admin.pages.pangkat';
    }
}
