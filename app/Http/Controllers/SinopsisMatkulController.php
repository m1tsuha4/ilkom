<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalFunction;
use App\Models\SinopsisMatkul;
use Illuminate\Http\Request;

class SinopsisMatkulController extends MasterController
{
    public function __construct()
    {
        $this->model = SinopsisMatkul::class;
        $this->viewPath = 'admin.pages.sinopsismatkul';
    }

    // public function manage()
    // {
    //     $dataSinopsisMatkul = SinopsisMatkul::first();
    //     if ($dataSinopsisMatkul) {
    //         return view('admin.pages.sinopsismatkul.edit', compact('dataSinopsisMatkul'));
    //     } else {
    //         return view('admin.pages.sinopsismatkul.create');
    //     }
    // }

    // public function manageStore(Request $request)
    // {
    //     $pdfPath = 'sinopsismatkul';
    //     $validated = $request->validate($this->model::$rules);
    //     if ($request->hasFile('pdf')) {
    //         $pdfName = GlobalFunction::savePdf($request->file('pdf'), uniqid(), $pdfPath);
    //         $validated['pdf'] = $pdfName;
    //     }
    //     $this->model::create($validated);
    //     return redirect()->route('sinopsismatkul.manage')->with('success', 'Data created successfully');
    // }

    // public function edit($id)
    // {
    //     $dataSinopsisMatkul = SinopsisMatkul::findOrFail($id);
    //     return view('admin.pages.sinopsismatkul.edit', compact('dataSinopsisMatkul'));
    // }

    // public function manageUpdate(Request $request, $id)
    // {
    //     $dataSinopsisMatkul = SinopsisMatkul::findOrFail($id);

    //     $validated = $request->validate($this->model::$rules);

    //     $pdfPath = 'sinopsismatkul';

    //     if ($request->hasFile('pdf')) {
    //         if ($dataSinopsisMatkul->pdf) {
    //             GlobalFunction::deletePdf($dataSinopsisMatkul->pdf, $pdfPath);
    //         }

    //         $pdfName = GlobalFunction::savePdf($request->file('pdf'), uniqid(), $pdfPath);
    //         $validated['pdf'] = $pdfName;
    //     }

    //     $dataSinopsisMatkul->update($validated);

    //     return redirect()->route('sinopsismatkul.edit', $id)->with('success', 'Data updated successfully');
    // }
}
