<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;



class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('file');
        $path = Storage::disk('google')->putFile('uploads', $file);

        return response()->json([
            'path' => $path,
            'url' => Storage::disk('google')->url($path),
        ]);
    }
}
