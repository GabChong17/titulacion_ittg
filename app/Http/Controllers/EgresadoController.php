<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use App\Models\Requisito;
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
    public function tramite($id)
    {
        // $requisito = new Requisito();
        // $requisito->opcion=$id;
        // $requisito->egresado_id=Auth::user()->id;
        // $requisito->save();
        // $isAdmin = 1;
        //  return view('egresado.tramite',  compact('isAdmin'));
         $opcion = Opcion::find($id);
         $tramite = Plan::find($id);
         $isAdmin = 1;
        //  $tramites = Tramite::where('egresado_id',Auth::id())->get();

        return view('egresado.tramite',compact('tramite', 'isAdmin','opcion'));        
    }
   
    
    public function store1(Request $request)
    {
        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id= $request->id;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);

        if ($request->file('requisito2') !=  NULL ){
            //Almacena Requisito 2
            $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
            $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);
        }

        if ($request->file('requisito3') !=  NULL ){
            //Almacena Requisito 3
            $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
            $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);
        }

         if ($request->file('requisito4') !=  NULL ){
            //Almacena Requisito 4
            $tramite['requisito4'] = $request->file('requisito4')->getClientOriginalName();
            $request->file('requisito4')->storeAs('public/tramites/', $tramite['requisito4']);
         }

         if ($request->file('requisito5') !=  NULL ){
                //Almacena Requisito 5
            $tramite['requisito5'] = $request->file('requisito5')->getClientOriginalName();
            $request->file('requisito5')->storeAs('public/tramites/', $tramite['requisito5']);
         }
        
         if ($request->file('requisito6') !=  NULL ){
            //Almacena Requisito 6
            $tramite['requisito6'] = $request->file('requisito6')->getClientOriginalName();
            $request->file('requisito6')->storeAs('public/tramites/', $tramite['requisito6']);
         }
         
        $tramite->save();
        $opcion = Opcion::find(1);

        return redirect('/crearCita/confirm');  
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
