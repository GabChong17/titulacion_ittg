<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Egresado;
use App\Models\User;
use App\Models\Tramite;
use App\Models\Opcion;
use App\Models\Jurado;
use App\Models\Asesor;
use DB;
use Illuminate\Http\Response;





class AcademiaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('academia',['only'=> ['index']]);
    // }
    public function liberacion()
    {
        $egresado = User::where('rol', 'egresado')->get();
        $tramites = Tramite::where('egresado_id',Auth::id())->get();
        
        return view('academia.liberacion', compact('tramites', 'egresado'));
    }

    public function asesor()
    {
        $egresado = User::where('rol', 'egresado')->get();
        
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_Solicitud_De_Asesores = DB::select("SELECT estado from users where estado = 'Solicitud_De_Asesores'");
        
        // $users_tramite_iniciado = User::where('estado', '=', 'Tramite_iniciado')->get();
        $users_solicitud_de_asesores = User::where('estado', '=', 'Solicitud_De_Asesores')->get();
        $users_asesores_asignados = User::where('estado', '=', 'Asesores_Asignados')->get();


        return view('academia.solicitudAsesor',compact('users_solicitud_de_asesores','users_asesores_asignados'));
        
         
    }

    public function firmas(Request $request, $id)
    {
        $valores = $request-> all();
        $egresado = User::find($id);
        $egresado->estado = 'Asesoria_Liberada';
        $egresado->save();

        $request->file('firmas')->store('firmas','public');
        return redirect('/academiaAsesor')->with('message', 'Documento subido');
       
        
    }
    public function asignar_asesor($id)
    {
        $egresado = User::find($id);
        $egresado->estado = 'Asesores_Asignados';
        $egresado->save();

        $asesor = User::where('rol', 'asesor')->get();
        $revisor = User::where('rol', 'asesor')->get();
        $revisor2 = User::where('rol', 'asesor')->get();
       

        return view('academia.asignarAsesor', compact('asesor','egresado','revisor','revisor2')); 
        
    }
 
    
    public function asesoria_liberada($id)
    {

        $egresado = User::find($id);
        // $egresado->estado = 'Asesoria_Liberada';
        // $egresado->save();

        return view('academia.asesorialiberada',compact('egresado'));
       
    }
    public function liberacionAsesoria()
    {
        $egresado = User::where('rol', 'egresado')->get();
        
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_Solicitud_De_Asesores = DB::select("SELECT estado from users where estado = 'Solicitud_De_Asesores'");
        
        // $users_tramite_iniciado = User::where('estado', '=', 'Tramite_iniciado')->get();
        $users_asesores_asignados = User::where('estado', '=', 'Asesores_Asignados')->get();


        return view('academia.liberacionAsesoria',compact('users_asesores_asignados'));
       
    }
    public function academiaJurado()
    {
        $egresado = User::where('rol', 'egresado')->get();
        
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_Solicitud_De_Asesores = DB::select("SELECT estado from users where estado = 'Solicitud_De_Asesores'");
        
        // $users_tramite_iniciado = User::where('estado', '=', 'Tramite_iniciado')->get();
        $users_solicitud_jurado = User::where('estado', '=', 'Solicitud_Jurado')->get();


        return view('academia.solicitudJurado',compact('users_solicitud_jurado'));
       
    }

    public function asignar_jurado($id)
    {
        $egresado = User::find($id);
        $presidente = User::where('rol', 'asesor')->get();
        $secretario = User::where('rol', 'asesor')->get();
        $vocal_propietario = User::where('rol', 'asesor')->get(); 
        $vocal_suplente = User::where('rol', 'asesor')->get();
       

        return view('academia.asignarJurado', compact('egresado','presidente','secretario','vocal_propietario','vocal_suplente')); 
        
    }

    public function guardarAsesor(Request $request, $id)
    {
        
        $valores = $request->all();
        $registro = new Asesor();
        $user = User::find($id);
        $valores['egresado_id']=$id;                
        $registro->fill($valores);
        $registro->save();

        return redirect("/academiaAsesor")->with('mensaje','Aseosres asignados correctamente');
        
    
    }
    public function guardarJurado(Request $request, $id)
    {
        //
        $egresado = User::find($id);
        $egresado->estado = 'Jurado_Asignado';
        $egresado->save();

        $valores = $request->all();
        $registro = new Jurado();
        $user = User::find($id);
        $valores['egresado_id']=$id;                               
        $registro->fill($valores);
        $registro->save();

        return redirect("/academiaJurado")->with('mensaje','Jurado asignado correctamente');
        
    
    }
    public function imprimir_aval($id)
    { 
        $egresado = User::find($id);
        $pdf = \PDF::loadView('pdf.aval_de_academia',compact('egresado'))->setOptions(['defaultFont' => 'sans-serif']);
       //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
   }

   public function imprimir_liberacion($id)
    { 
        $egresado = User::find($id);
        $pdf = \PDF::loadView('pdf.liberacion_academica',compact('egresado'))->setOptions(['defaultFont' => 'sans-serif']);
       //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
   }

   public function imprimir_respuesta_integracion_jurado($id)
   { 
       $egresado = User::find($id);
       $pdf = \PDF::loadView('pdf.respuesta_de_integracion_jurado',compact('egresado'))->setOptions(['defaultFont' => 'sans-serif']);
      //return view('pdf.aval_de_academia');
       return $pdf->stream('ejemplo.pdf');
  }

   
}
