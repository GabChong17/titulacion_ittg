<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EgresadoController extends Controller
{
    public function tesis()
    {
        return view('egresado.tesis');
    }

    public function proyecto()
    {
        return view('egresado.proyecto');
    }

    public function prototipo()
    {
        return view('egresado.prototipo');
    }

    public function store(Request $request)
    {
            $request->file('documento')->store('documents','public');
            return redirect()->back()->with('message', 'Documento subido');  
    }

    public function cita(Request $request)
    {

        $cita = request()->except(['_token']);
        //actualizar el tramite para ponerle la fecha y hora       
        //detalle
        //le cambio al tramite el estado a "CITA AGENDADA"
        Tramite::insert($cita);
        
        return redirect('/dashboard')->with('message', 'Cita guardada');  
    }
}
