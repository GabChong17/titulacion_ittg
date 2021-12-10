<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Egresado;
use App\Models\User;
use App\Models\Opcion;
use App\Models\Jurado;
use App\Models\Asesor;
use DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificacionEgresado;









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

        
        $sube_protocolo = User::where('estado', '=', 'Asesores_Asignados')->get();
        $sube_boucher = User::where('estado', '=', 'Revision_Escolares')->get();


        // return view('academia.liberacionAsesoria',compact('users_asesores_asignados'));
       
        
        return view('academia.liberacion', compact('tramites', 'egresado','sube_protocolo','sube_boucher'));
    }

    public function asesor()
    {
        $egresado = User::where('rol', 'egresado')->get();
        
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_Solicitud_De_Asesores = DB::select("SELECT estado from users where estado = 'Solicitud_De_Asesores'");
        
        // $users_tramite_iniciado = User::where('estado', '=', 'Tramite_iniciado')->get();
        $users_solicitud_de_asesores = User::where('estado', '=', 'Solicitud_De_Asesores')->get();
       
            //carreras
        $sistemas = User::where('carrera', '=', 'Sistemas Computacionales')->get();
        $logistica = User::where('carrera', '=', 'Logistica')->get();
        $gestion = User::where('carrera', '=', 'Gestion Empresarial')->get();
        $industrial = User::where('carrera', '=', 'Industrial')->get();
        $mecanica = User::where('carrera', '=', 'Mecanica')->get();
        $electrica = User::where('carrera', '=', 'Electrica')->get();
        $electronica = User::where('carrera', '=', 'Electronica')->get();
        $quimica = User::where('carrera', '=', 'Quimica')->get();
        $bioquimica = User::where('carrera', '=', 'Bioquimica')->get();


        return view('academia.solicitudAsesor',compact('users_solicitud_de_asesores','sistemas','logistica','gestion','industrial','mecanica','electrica','electronica','quimica','bioquimica'));
        
         
    }

    public function firmas(Request $request, $id)
    {
        $valores = $request-> all();
        $egresado = User::find($id);
        $egresado->estado = 'Asesoria_Liberada';
        $egresado->save();

        $request->file('firmas')->store('firmas','public');
        return redirect('/liberacionAsesoria')->with('message', 'Documento subido');
    
    }
  
    //fucicon para subir el boucher desde la vista del egresado
    public function boucher(Request $request, $id)
    {
  
      $egresado = User::find($id);

      $recepcion = request()->except(['_token']);
      $recepcion['egresado_id'] = Auth::id();

      $tramite['boucher'] = $request->file('boucher')->getClientOriginalName();
      $request->file('boucher')->storeAs('public/boucher', $tramite['boucher']);

      Tramite::where('egresado_id', $egresado->id)
              ->update(['boucher' => $tramite]);
      
      return redirect('/liberacion');
    }
      //funcion para subir el protocolo desde la vista del egresado
    public function protocolo(Request $request, $id)
      {
    
        $egresado = User::find($id);
  
        $recepcion = request()->except(['_token']);
        $recepcion['egresado_id'] = Auth::id();
  
        $tramite['protocolo'] = $request->file('protocolo')->getClientOriginalName();
        $request->file('protocolo')->storeAs('public/protocolo', $tramite['protocolo']);
  
        Tramite::where('egresado_id', $egresado->id)
                ->update(['protocolo' => $tramite]);
        
        return redirect('/liberacion');
      }
    public function asignar_asesor($id)
    {
        $egresado = User::find($id);
        // $egresado->estado = 'Asesores_Asignados';
        // $egresado->save();

        $asesor = User::where('rol', 'asesor')->get();
        $revisor = User::where('rol', 'asesor')->get();
        $revisor2 = User::where('rol', 'asesor')->get();
        $tramite = Tramite::where('egresado_id', $id)
       ->first();
       

        $correo = new NotificacionEgresado;
        $egresado = User::find($id);
        Mail::to($egresado)->send($correo);

        return view('academia.asignarAsesor', compact('asesor','egresado','revisor','revisor2', 'tramite')); 
        
    }
 
    
    public function asesoria_liberada($id)
    {

        $egresado = User::find($id);

        $asesores = Asesor::where('egresado_id', $id)
        ->first();
        $asesor = User::find($asesores->asesor_id);
        $revisor1 = User::find($asesores->revisor1_id);
        $revisor2 = User::find($asesores->revisor2_id);

        $tramite = Tramite::where('egresado_id', $id)
        ->first();

       
        return view('academia.asesorialiberada',compact('egresado','asesor','revisor1','revisor2','tramite'));
       
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
        $tramite = Tramite::where('egresado_id', $id)
        ->first();
       

        return view('academia.asignarJurado', compact('egresado','presidente','secretario','vocal_propietario','vocal_suplente', 'tramite')); 
        
    }

    public function guardarAsesor(Request $request, $id)
    {
        
        $egresado = User::find($id);
        $egresado->estado = 'Asesores_Asignados';
        $egresado->save();

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
        
        $correo = new NotificacionEgresado;
        $egresado = User::find($id);
        Mail::to($egresado)->send($correo);

        return redirect("/academiaJurado")->with('mensaje','Jurado asignado correctamente');
        
    
    }
    public function imprimir_aval($id)
    { 
        $egresado = User::find($id);

        $asesores = Asesor::where('egresado_id', $id)
        ->first();
        $asesor = User::find($asesores->asesor_id);
        $revisor1 = User::find($asesores->revisor1_id);
        $revisor2 = User::find($asesores->revisor2_id);

        $tramite = Tramite::where('egresado_id', $id)
        ->first();
        $opcion = Tramite::find($tramite->opciones_id);

        // dd($asesores);

        $pdf = \PDF::loadView('pdf.aval_de_academia',compact('egresado','asesor','revisor1','revisor2', 'tramite','opcion'))->setOptions(['defaultFont' => 'sans-serif']);
       //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
   }

   public function imprimir_liberacion($id)
    { 
        $egresado = User::find($id);
        $asesores = Asesor::where('egresado_id', $id)
        ->first();
        $asesor = User::find($asesores->asesor_id);
        $revisor1 = User::find($asesores->revisor1_id);
        $revisor2 = User::find($asesores->revisor2_id);

        $tramite = Tramite::where('egresado_id', $id)
        ->first();
        $pdf = \PDF::loadView('pdf.liberacion_academica',compact('egresado', 'tramite','asesor','revisor1','revisor2'))->setOptions(['defaultFont' => 'sans-serif']);
       //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
   }

   public function imprimir_respuesta_integracion_jurado($id)
   { 
       $egresado = User::find($id);

       $tramite = Tramite::where('egresado_id', $id)
       ->first();
       $jurado = Jurado::where('egresado_id', $id)
       ->first();
       $presidente = User::find($jurado->presidente);
       $secretario = User::find($jurado->secretario);
       $vocal_propietario = User::find($jurado->vocalp);
       $vocal_suplente = User::find($jurado->vocals);

       $pdf = \PDF::loadView('pdf.respuesta_de_integracion_jurado',compact('egresado','tramite','presidente','secretario','vocal_propietario','vocal_suplente'))->setOptions(['defaultFont' => 'sans-serif']);
      //return view('pdf.aval_de_academia');
       return $pdf->stream('ejemplo.pdf');
  }

   
}