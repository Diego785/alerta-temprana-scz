<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function save(Request $request)
    {
        $path = "Sin datos";
        // $image = $request->file('file');
        //  $url = Storage::put('public/imgs/testing_images', $request->file('file'));
        // $image = Storage::put('\public\imgs\testing_images', $request->file('file'));
        // return view('my_views.testing_images.save_image', compact('image'));
        // $this->file = Input::file('fasdfas');
        // $file->move(public_path().'/images/',$user->id.'.jpg');
        // Storage::put('public/imgs/testing_images/' . $request->filePath, $this->filePath);
        if ($request->hasFile('file')) {
            $destination_path = 'public/imgs/testing_images';
            $image = $request->file('file');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('file')->storeAs($destination_path, $image_name);
        }
        return $path;
    }
}
