<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends MasterController
{
    public function __construct()
    {
        $this->model = Fakultas::class;
        $this->viewPath = 'admin.pages.fakultas';
    }

    public function index()
    {
        $dataFakultas = Fakultas::first();
        return view('admin.pages.fakultas.index', compact('dataFakultas'));
    }

    public function edit($id)
    {
        abort(404);
    }

    public function manage()
    {
        $page = 'Fakultas';
        $dataFakultas = Fakultas::first();
        if ($dataFakultas) {
            return view('admin.pages.fakultas.edit', compact('dataFakultas', 'page'));
        } else {
            return view('admin.pages.fakultas.create', compact('page'));
        }
    }

    public function updateManage(Request $request)
    {
        $validated = $request->validate($this->model::$rules);
        $dataFakultas = Fakultas::first();
        if ($dataFakultas) {
            $dataFakultas->update($request->all());
        } else {
            Fakultas::create($request->all());
        }
        return redirect()->route('fakultas.index')->with('success', 'Data updated successfully');
    }
}
