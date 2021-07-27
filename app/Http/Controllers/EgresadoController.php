<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Opcion;
use App\Models\Egresado;


class EgresadoController extends Controller
{


    public function tesis()
    {
        $tramite = new Tramite();
        $tramite->opciones_id=1;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"
        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;

        $tramite->save();
 
         $opcion = Opcion::find(1);

         return view('egresado.tesis')->with('opcion',$opcion);
    }

    public function proyecto()
    {
        
        $tramite = new Tramite();
        $tramite->opciones_id=2;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"
        $tramite->save();
 
         $opcion = Opcion::find(2);
         return view('egresado.proyecto')->with('opcion',$opcion);;
    }

    public function prototipo()
    {
        
        $tramite = new Tramite();
        $tramite->opciones_id=3;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"
        $tramite->save();
 
         $opcion = Opcion::find(3);
         return view('egresado.prototipo')->with('opcion',$opcion);;
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
        $tramite->opciones_id= $id;
        $tramite->egresado_id=$request->session()->get('user');//nombre de la variable de autentificacion "user"
        $tramite->save();
 
         $opcion = Opcion::find($id);
         return view('egresado.tesis')->with('opcion',$opcion);;
     }
}
