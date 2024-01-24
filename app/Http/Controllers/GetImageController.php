<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class GetImageController extends Controller
{
    //
    public function displayImage($filename)
    {
        $path = storage_path('app/public/logos/' . $filename);
        if (!File::exists($path)) {
            abort(404);
        }
        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header('Content-Type', $type);

        return $response;
    }
}
