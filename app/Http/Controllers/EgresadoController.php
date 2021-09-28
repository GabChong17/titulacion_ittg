<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Opcion;
use App\Models\Egresado;
use App\Models\User;
use DB;
 


class EgresadoController extends Controller
{


    

    public function tesis(Request $request)
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

    public function storeTesis(Request $request)
    {

        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=1;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);


        //Almacena Requisito 2
        $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
        $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);

         //Almacena Requisito 3
         $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
         $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);

        $tramite->save();
        $opcion = Opcion::find(1);
        
        // return redirect('/crearCita/confirm/{{$egresado->id}}')->with('message', 'Documento subido'); 
            return redirect('/crearCita/confirm');  
    }

    public function storeProyecto(Request $request)
    {
        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=2;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;

      //Almacena Requisito 1
      $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
      $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);


      //Almacena Requisito 2
      $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
      $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);

       //Almacena Requisito 3
       $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
       $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);

        $opcion = Opcion::find(2); //no lo borres si sirve al final :v
        $tramite->save();
 
        
        return redirect('/crearCita/confirm')->with('message', 'Documento subido'); 
            return redirect()->back()->with('message', 'Documento subido');   
    }

    public function storePrototipo(Request $request)
    {
        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=3;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);


        //Almacena Requisito 2
        $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
        $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);

         //Almacena Requisito 3
         $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
         $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);

        $opcion = Opcion::find(3); //no lo borres si sirve al final :v
        $tramite->save();
 
        
        // return redirect('/crearCita/confirm/{{$egresado->id}}')->with('message', 'Documento subido'); 
            return redirect()->back()->with('message', 'Documento subido');   
    }
    public function confirmar($id)
    {
        $egresado = User::find($id);
        $egresado->estado = 'Cita_Agendada';
        $egresado->save();

        return redirect('/inicio')->with('message', 'Cita guardada.');  

    }

    public function agendada(Request $request)
    {
        $cita = request()->except(['_token']);
        //actualizar el tramite para ponerle la fecha y hora       
        //detalle
        //le cambio al tramite el estado a "CITA AGENDADA"
        $cita['egresado_id'] = Auth::id();
        Tramite::insert($cita);

    }
    public function crearCita (Request $request, $id) 
    {
        //aqui debes agregar el tramite
        
        $tramite = new Tramite();
        $tramite->opciones_id= $id;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"
        $tramite->save();
 
         $opcion = Opcion::find($id);
         return view('egresado.tesis')->with('opcion',$opcion);;
     }


     public function imprimir_solicitud_autorizacion($id)
    {
        $egresado = User::find($id);
        $pdf = \PDF::loadView('pdf.autorizacion',compact('egresado'))->setOptions(['defaultFont' => 'sans-serif']);
       //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
   }
   

   

   
}
