<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalFunction;
use App\Models\KalenderAkademik;
use Illuminate\Http\Request;

class KalenderAkademikController extends MasterController
{
    public function __construct()
    {
        $this->model = KalenderAkademik::class;
        $this->viewPath = 'admin.pages.kalenderakademik';
    }

    // public function manage()
    // {
    //     $dataKalenderAkademik = KalenderAkademik::first();
    //     if ($dataKalenderAkademik) {
    //         return view('admin.pages.kalenderakademik.edit', compact('dataKalenderAkademik'));
    //     } else {
    //         return view('admin.pages.kalenderakademik.create');
    //     }
    // }

    // public function manageStore(Request $request)
    // {
    //     $pdfPath = 'kalenderakademik';
    //     $validated = $request->validate($this->model::$rules);
    //     if ($request->hasFile('pdf')) {
    //         $pdfName = GlobalFunction::savePdf($request->file('pdf'), uniqid(), $pdfPath);
    //         $validated['pdf'] = $pdfName;
    //     }
    //     $this->model::create($validated);
    //     return redirect()->route('kalenderakademik.manage')->with('success', 'Data created successfully');
    // }

    // public function edit($id)
    // {
    //     $dataKalenderAkademik = KalenderAkademik::findOrFail($id);
    //     return view('admin.pages.kalenderakademik.edit', compact('dataKalenderAkademik'));
    // }

    // public function manageUpdate(Request $request, $id)
    // {
    //     $dataKalenderAkademik = KalenderAkademik::findOrFail($id);

    //     $validated = $request->validate($this->model::$rules);

    //     $pdfPath = 'kalenderakademik';

    //     if ($request->hasFile('pdf')) {
    //         if ($dataKalenderAkademik->pdf) {
    //             GlobalFunction::deletePdf($dataKalenderAkademik->pdf, $pdfPath);
    //         }

    //         $pdfName = GlobalFunction::savePdf($request->file('pdf'), uniqid(), $pdfPath);
    //         $validated['pdf'] = $pdfName;
    //     }

    //     $dataKalenderAkademik->update($validated);

    //     return redirect()->route('kalenderakademik.edit', $id)->with('success', 'Data updated successfully');
    // }
}
