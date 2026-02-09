<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalFunction;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends MasterController
{
    public function __construct()
    {
        $this->model = StrukturOrganisasi::class;
        $this->viewPath = 'admin.pages.strukturorganisasi';
    }

    public function create()
    {
        abort(404);
    }

    public function store(Request $request)
    {
        abort(404);
    }

    public function update(Request $request, $id)
    {
        abort(404);
    }

    public function destroy($id)
    {
        abort(404);
    }

    public function manage()
    {
        $dataStrukturOrganisasi = StrukturOrganisasi::first();
        if ($dataStrukturOrganisasi) {
            return view('admin.pages.strukturorganisasi.edit', compact('dataStrukturOrganisasi'));
        } else {
            return view('admin.pages.strukturorganisasi.create');
        }
    }

    public function manageStore(Request $request)
    {
        $imagePath = 'strukturorganisasi';
        $validated = $request->validate($this->model::$rules);
        if ($request->hasFile('image')) {
            $imageName = GlobalFunction::saveImage($request->file('image'), uniqid(), $imagePath);
            $validated['image'] = $imageName;
        }
        $this->model::create($validated);
        return redirect()->route('strukturorganisasi.manage')->with('success', 'Data created successfully');
    }

    public function edit($id)
    {
        $dataStrukturOrganisasi = StrukturOrganisasi::findOrFail($id);
        return view('admin.pages.strukturorganisasi.edit', compact('dataStrukturOrganisasi'));
    }

    public function manageUpdate(Request $request, $id)
    {
        $dataStrukturOrganisasi = StrukturOrganisasi::findOrFail($id);

        $validated = $request->validate($this->model::$rules);

        $imagePath = 'strukturorganisasi';

        if ($request->hasFile('image')) {
            if ($dataStrukturOrganisasi->image) {
                GlobalFunction::deleteImage($dataStrukturOrganisasi->image, $imagePath);
            }

            $imageName = GlobalFunction::saveImage($request->file('image'), uniqid(), $imagePath);
            $validated['image'] = $imageName;
        }

        $dataStrukturOrganisasi->update($validated);

        return redirect()->route('strukturorganisasi.edit', $id)->with('success', 'Data updated successfully');
    }
}
