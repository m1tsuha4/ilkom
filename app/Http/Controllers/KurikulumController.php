<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalFunction;
use App\Models\Kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends MasterController
{
    public function __construct()
    {
        $this->model = Kurikulum::class;
        $this->viewPath = 'admin.pages.kurikulum';
    }

    public function show($id)
    {
        $kurikulum = Kurikulum::find($id);
        return view($this->viewPath . '.show', compact('kurikulum'));
    }

    // public function manage()
    // {
    //     $dataKurikulum = Kurikulum::first();
    //     if ($dataKurikulum) {
    //         return view('admin.pages.kurikulum.edit', compact('dataKurikulum'));
    //     } else {
    //         return view('admin.pages.kurikulum.create');
    //     }
    // }

    // public function manageStore(Request $request)
    // {
    //     $imagePath = 'kurikulum';
    //     $validated = $request->validate($this->model::$rules);
    //     if ($request->hasFile('image')) {
    //         $imageName = GlobalFunction::saveImage($request->file('image'), uniqid(), $imagePath);
    //         $validated['image'] = $imageName;
    //     }
    //     $this->model::create($validated);
    //     return redirect()->route('kurikulum.manage')->with('success', 'Data created successfully');
    // }

    // public function edit($id)
    // {
    //     $dataKurikulum = Kurikulum::findOrFail($id);
    //     return view('admin.pages.kurikulum.edit', compact('dataKurikulum'));
    // }

    // public function manageUpdate(Request $request, $id)
    // {
    //     $dataKurikulum = Kurikulum::findOrFail($id);

    //     $validated = $request->validate($this->model::$rules);

    //     $imagePath = 'kurikulum';

    //     if ($request->hasFile('image')) {
    //         if ($dataKurikulum->image) {
    //             GlobalFunction::deleteImage($dataKurikulum->image, $imagePath);
    //         }

    //         $imageName = GlobalFunction::saveImage($request->file('image'), uniqid(), $imagePath);
    //         $validated['image'] = $imageName;
    //     }

    //     $dataKurikulum->update($validated);

    //     return redirect()->route('kurikulum.edit', $id)->with('success', 'Data updated successfully');
    // }
}
