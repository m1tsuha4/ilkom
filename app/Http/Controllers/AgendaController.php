<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends MasterController
{
    public function __construct()
    {
        $this->model = Agenda::class;
        $this->viewPath = 'admin.pages.agenda';
    }

    public function show($id)
    {
        $agenda = Agenda::find($id);
        return view($this->viewPath . '.show', compact('agenda'));
    }
}
