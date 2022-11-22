<?php

namespace App\Http\Controllers\PostController;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Upload extends Controller
{
    public function upload(Request $request){
        
        $path = 'storage/uploads';

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        $location = url('storage/uploads/'.$name);

        return response()->json([
            'location' => $location
        ]);
    }
}
