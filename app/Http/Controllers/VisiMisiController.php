<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends MasterController
{
    public function __construct()
    {
        $this->model = VisiMisi::class;
        $this->viewPath = 'admin.pages.visimisi';
    }

    public function index()
    {
        $dataVisiMisi = VisiMisi::first();
        return view('admin.pages.visimisi.index', compact('dataVisiMisi'));
    }

    public function edit($id)
    {
        abort(404);
    }

    public function manage()
    {
        $dataVisiMisi = VisiMisi::first();
        if ($dataVisiMisi) {
            return view('admin.pages.visimisi.edit', compact('dataVisiMisi'));
        } else {
            return view('admin.pages.visimisi.create');
        }
    }

    public function updateManage(Request $request)
    {
        $dataVisiMisi = VisiMisi::first();
        if ($dataVisiMisi) {
            $dataVisiMisi->update($request->all());
        } else {
            VisiMisi::create($request->all());
        }
        return redirect()->route('visimisi.index')->with('success', 'Data updated successfully');
    }
}
