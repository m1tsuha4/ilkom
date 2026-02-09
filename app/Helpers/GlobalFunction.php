<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class GlobalFunction
{
    public static function saveImage($image, $name, $path = '')
    {
        if ($image == null) {
            return null;
        }
        $extension = $image->getClientOriginalExtension();
        $filename = $name . '.' . $extension;
        $path = public_path('dist/assets/img/' . $path);
        $image->move($path, $filename);
        return $filename;
    }

    public static function deleteImage($filename, $path = '')
    {
        $path = public_path('dist/assets/img/' . $path);

        if (file_exists($path . $filename)) {
            unlink($path . $filename);
        } else {
            return false;
        }
    }

    public static function savePdf($pdf, $name, $path = '')
    {
        if ($pdf == null) {
            return null;
        }
        $extension = $pdf->getClientOriginalExtension();
        if (strtolower($extension) !== 'pdf') {
            throw new \Exception('The uploaded file must be a PDF.');
        }

        $filename = $name . '.' . $extension;
        $path = public_path('dist/assets/pdf/' . $path);
        $pdf->move($path, $filename);
        return $filename;
    }

    public static function deletePdf($filename, $path = '')
    {
        $path = public_path('dist/assets/pdf/' . $path);
        if (file_exists($path . $filename)) {
            unlink($path . $filename);
        } else {
            return false;
        }
    }
}
