<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use Illuminate\Http\Request;


class DocumentosController extends Controller
{
    public function store(Request $request)
    {

       
            $request->file('documento')->store('documents','public');
            return redirect()->back()->with('message', 'Documento subido');  
    }

    public function cita(Request $request)
    {

        $cita = request()->except(['_token']);

        tramite::insert($cita);
           
      
       return redirect('/crearCita/confirm')->with('message', 'Cita guardada');  
    }
}
