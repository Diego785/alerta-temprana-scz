<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function save(Request $request)
    {
        $path = "Sin datos";
        // if ($request->hasFile('image')) {
        //     $destination_path = 'public/imgs/testing_images';
        //     $image = $request->file('image');
        //     $image_name = $image->getClientOriginalName();
        //     $path = $request->file('image')->storeAs($destination_path, $image_name);
        // }
        if ($request->hasFile('file')) {
            $destination_path = 'public/imgs/testing_images';
            $image = $request->file('file');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('file')->storeAs($destination_path, $image_name);
        }
        return $path;
    }
}
