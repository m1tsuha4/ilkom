<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalFunction;
use App\Models\AkreditasiDepartemen;
use Illuminate\Http\Request;

class AkreditasiDepartemenController extends MasterController
{
    public function __construct()
    {
        $this->model = AkreditasiDepartemen::class;
        $this->viewPath = 'admin.pages.akreditasidepartemen';
    }

    public function show($id)
    {
        $akreditasi = AkreditasiDepartemen::find($id);
        return view($this->viewPath . '.show', compact('akreditasi'));
    }

    // public function manage()
    // {
    //     $dataAkreditasiDepartemen = AkreditasiDepartemen::first();
    //     if ($dataAkreditasiDepartemen) {
    //         return view('admin.pages.akreditasidepartemen.edit', compact('dataAkreditasiDepartemen'));
    //     } else {
    //         return view('admin.pages.akreditasidepartemen.create');
    //     }
    // }

    // public function manageStore(Request $request)
    // {
    //     $imagePath = 'akreditasidepartemen';
    //     $validated = $request->validate($this->model::$rules);
    //     if ($request->hasFile('image')) {
    //         $imageName = GlobalFunction::saveImage($request->file('image'), uniqid(), $imagePath);
    //         $validated['image'] = $imageName;
    //     }
    //     $this->model::create($validated);
    //     return redirect()->route('akreditasidepartemen.manage')->with('success', 'Data created successfully');
    // }

    // public function edit($id)
    // {
    //     $dataAkreditasiDepartemen = AkreditasiDepartemen::findOrFail($id);
    //     return view('admin.pages.akreditasidepartemen.edit', compact('dataAkreditasiDepartemen'));
    // }

    // public function manageUpdate(Request $request, $id)
    // {
    //     $dataAkreditasiDepartemen = AkreditasiDepartemen::findOrFail($id);

    //     $validated = $request->validate($this->model::$rules);

    //     $imagePath = 'akreditasidepartemen';

    //     if ($request->hasFile('image')) {
    //         if ($dataAkreditasiDepartemen->image) {
    //             GlobalFunction::deleteImage($dataAkreditasiDepartemen->image, $imagePath);
    //         }

    //         $imageName = GlobalFunction::saveImage($request->file('image'), uniqid(), $imagePath);
    //         $validated['image'] = $imageName;
    //     }

    //     $dataAkreditasiDepartemen->update($validated);

    //     return redirect()->route('akreditasidepartemen.edit', $id)->with('success', 'Data updated successfully');
    // }
}
