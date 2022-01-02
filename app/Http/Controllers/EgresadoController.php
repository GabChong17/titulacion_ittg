<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use App\Models\Requisito;
use App\Models\Requisitoso;
use App\Models\TramiteRequisito;
use App\Models\Formato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Opcion;
use App\Models\Egresado;
use App\Models\User;
use App\Models\Plan;
use DB;
 


class EgresadoController extends Controller
{
    public function inicio()
    {
        $egresado = User::where('rol', 'egresado')->get();
    
        $plan93 = User::where('planDeestudios', '=', '1')->get();
        $plan2004 = User::where('planDeestudios', '=', '2')->get();
      

         return view('dashboard',compact('plan93','plan2004'));
    }
    public function inicioProceso()
    {
        $egresado = User::where('rol', 'egresado')->get();      

        return view('egresado.inicioProceso');       
    }

    public function tramite($id)
    {
       
         $opcion = Opcion::find($id);
         $opcionId = Opcion::find($id)->id;
         $tramite = Plan::find($id);
         $egresado = User::find($id);
         
         $planId = Auth::user()->plan->id;
         $Requisitoso = Requisitoso::where('Planes_id',$planId)->where('Opciones_id', $opcionId)->get();
        //  dd($Requisitoso);
         $isAdmin = 1;
        return view('egresado.tramite',compact('tramite', 'isAdmin','opcion','egresado','Requisitoso'));        
    }
   
    
    public function store(Request $request)
    {
        // dd(sizeof($request->files));

        $valores = $request->all();
        $ArchivosVarios = (sizeof($request->files));
        
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id= $request->id;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
       
        $tramite->save();
        for ($i=0;$i<$ArchivosVarios; $i++){
            $Archivos = new TramiteRequisito();
           
            $Archivos['Nombre'] = $request->file('Nombre'.$i)->getClientOriginalName();
            $Archivos['Tramite_id'] = $tramite->id;
            $Archivos->save();
            $request->file('Nombre'.$i)->storeAs('public/tramites/', $Archivos['Nombre']);
        };

        
       
        // dd( $tramite);
        $opcion = Opcion::find(1);

        return redirect('/crearCita/confirm');  
    }
    public function documentoInicio(Request $request, $id)
    {
        
        $egresado = User::find($id);
  
        $recepcion = request()->except(['_token']);
        $recepcion['egresado_id'] = Auth::id();
  
        //Almacena Requisito 1
        $formatos['documentoInicio1'] = $request->file('documentoInicio1')->getClientOriginalName();
        $request->file('documentoInicio1')->storeAs('public/documentoInicio/', $formatos['documentoInicio1']);

        //Almacena Requisito 2
        $formatos['documentoInicio2'] = $request->file('documentoInicio2')->getClientOriginalName();
        $request->file('documentoInicio2')->storeAs('public/documentoInicio/', $formatos['documentoInicio2']);

        //Almacena Requisito 3
        $formatos['documentoInicio3'] = $request->file('documentoInicio3')->getClientOriginalName();
        $request->file('documentoInicio3')->storeAs('public/documentoInicio/', $formatos['documentoInicio3']);

        //Almacena Requisito 4
        $formatos['documentoInicio4'] = $request->file('documentoInicio4')->getClientOriginalName();
        $request->file('documentoInicio4')->storeAs('public/documentoInicio/', $formatos['documentoInicio4']);

        $egresado->estado = 'Documento_subido';
        $egresado->save();
        
        return redirect('/inicio');          
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
