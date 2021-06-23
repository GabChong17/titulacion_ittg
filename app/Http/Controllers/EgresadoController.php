<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
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
        
        return redirect('/crearCita/confirm')->with('message', 'Cita guardada');  
    }

    public function crearCita (Request $request, $id) {
        //aqui debes agregar el tramite
        
        $tramite = new Tramite();
        $tramite->opcion_id= $id;
        $tramite->egresado_id=$request->session()->get('LoggedUser');
        $tramite->save();
 
         $opcion = Opcion::find($id);
         return view('egresado.tesis')->with('opcion',$opcion);;
     }
}
