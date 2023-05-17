<?php

namespace App\Http\Controllers\Alerts;

use App\Http\Controllers\Controller;
use App\Models\Alerta;
use App\Models\Evento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;


class AlertController extends Controller
{


    public $file;
    public $filePath = "";

    public function index()
    {

        return view('my_views.alerts.show_alerts');
    }



    public function showByCategory($id)
    {
        // $evento = Evento::find($id);
        // $alerts = Alerta::where('evento_id', $evento->id)->get();
        return view('my_views.alerts.main_alerts', compact('id'));
    }

    public function sendingAlert($alerta_id, $evento_id)
    {
        return view('my_views.alerts.sending_alerts', compact('alerta_id', 'evento_id'));
    }

    public function upload()
    {
        $filePath = "";
        return view('my_views.testing_images.upload_image', compact('filePath'));
    }


    public function save(Request $request)
    {
        $path = "";
        // $image = $request->file('file');
        //  $url = Storage::put('public/imgs/testing_images', $request->file('file'));
        // $image = Storage::put('\public\imgs\testing_images', $request->file('file'));
        // return view('my_views.testing_images.save_image', compact('image'));
        // $this->file = Input::file('fasdfas');
        // $file->move(public_path().'/images/',$user->id.'.jpg');
        // Storage::put('public/imgs/testing_images/' . $request->filePath, $this->filePath);
        if ($request->hasFile('image')) {
            $destination_path = 'public/imgs/testing_images';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
        }
        return view('my_views.testing_images.save_image', compact('path'));
    }


    public function generatePDF($myId)
    {
        // Obtener datos necesarios
        $alerts = Alerta::where('evento_id', $myId)->get();

        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('my_views.testing.testing-pdfs', compact('alerts'));
        // return $pdf->download('Lista de alertas: ' . now() . '.pdf');
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('my_views.testing.testing-pdfs', compact('alerts'));
        return $pdf->download('Lista de alertas: ' . now() . '.pdf');
        // return view('my_views.testing.testing-pdfs', compact('alerts'));
    }

    public function alerts_list($alertsP)
    {

        $alerts = $alertsP;
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('my_views.testing.testing-pdfs', compact('alerts'));
        return $pdf->download('Lista de alertas: ' . now() . '.pdf');
    }
}
