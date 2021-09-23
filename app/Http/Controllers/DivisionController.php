<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Egresado;
use App\Models\User;
use App\Models\Tramite;
use DB;
 
class DivisionController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('division',['only'=> ['index']]);
    // }
    public function pase()
    {
        $egresado = User::where('rol', 'egresado')->get();
        $tramites = Tramite::where('egresado_id',Auth::id())->get();
        
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_revision_escolares = DB::select("SELECT estado from users where estado = 'Revision_Escolares'");
        
        $users_asesoria_liberada = User::where('estado', '=', 'Asesoria_Liberada')->get();
        return view('division.liberacion',compact('tramites','users_asesoria_liberada'));
    }

    public function aval()
    {
        $egresado = User::where('rol', 'egresado')->get();
        
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_revision_escolares = DB::select("SELECT estado from users where estado = 'Revision_Escolares'");
        
        $users_cita_agendada = User::where('estado', '=', 'Cita_Agendada')->get();
        return view('division.aval',compact('users_cita_agendada'));
    }


    public function acto()
    {
        $egresado = User::where('rol', 'egresado')->get();
        $tramites = Tramite::where('egresado_id',Auth::id())->get();
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_revision_escolares = DB::select("SELECT estado from users where estado = 'Revision_Escolares'");
        
        $users_no_incoveniencia = User::where('estado', '=', 'No_Incoveniencia')->get();

        return view('division.actorecepcional',compact('egresado','users_no_incoveniencia'));

    }
    public function formato()
    {
        return view('division.formato');
    }
    public function noincoveniencia()
    {
        $egresado = User::where('rol', 'egresado')->get();

        return view('division.noincoveniencia', compact('egresado'));
    }
    public function jurado()
    {
        
        $egresado = User::where('rol', 'egresado')->get();
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_revision_escolares = DB::select("SELECT estado from users where estado = 'Revision_Escolares'");
        
        $users_jurado_asignado = User::where('estado', '=', 'Jurado_Asignado')->get();

        return view('division.jurado',compact('egresado','users_jurado_asignado'));
    }
    public function recepcion(Request $request, $id)
    {
        $egresado = User::find($id);
        $egresado->estado = 'Revision_Escolares';
        $egresado->save();

        $recepcion = request()->except(['_token']);
        $recepcion['egresado_id'] = Auth::id();
        Tramite::insert($recepcion);

        return redirect('/PaseLiberacion')->with('message', 'Cita de recepcion agregada!!');  
    }
    public function  actoRecepcion(Request $request, $id)
    {
        $egresado = User::find($id);
        $egresado->estado = 'Solicitud_Jurado';
        $egresado->save();

        $recepcion = request()->except(['_token']);
        $recepcion['egresado_id'] = Auth::id();
        Tramite::insert($recepcion);

        return redirect('/actoRecepcional')->with('message', 'Acto recepcional agendado!');  
    }
    public function  asignacionActo(Request $request, $id)
    {
        $egresado = User::find($id);
        $egresado->estado = 'Acto_Agendado';
        $egresado->save();

        return redirect('/integracionJurado')->with('message', 'Acto recepcional agendado!');  
    }

    
    
    public function pase_liberacion($id)
    {
        $egresado = User::find($id);
        $tramites = Tramite::where('egresado_id',Auth::id())->get();

        return view('division.paseLiberacion',compact('tramites','egresado'));        
    }
    public function recepcion_acto($id)
    {
        $egresado = User::find($id);
        $tramites = Tramite::where('egresado_id',Auth::id())->get();

        return view('division.acto_recep', compact('tramites','egresado'));
    }
    public function jurado2($id)
    {
        $egresado = User::find($id);
        $presidente = Tramite::where('presidente', 'egresado_id');
       
        return view('division.jurado_integracion', compact('egresado','presidente'));
    }


    public function consultas()
    {
        return view('division.aval', compact('users'));
    }
    public function asesores($id)
    {
        $egresado = User::find($id);
        return view('division.solicitarAsesor', compact('egresado'));
    
    }
    //
    public function solicitudAsesor($id)
    {
       
        $egresado = User::find($id);
        $egresado->estado = 'Solicitud_De_Asesores';
        $egresado->save();

        return redirect("/divisionAval")->with('mensaje','Jurado asignado correctamente');
    
    }

    

    public function imprimir_aval_asesores($id)
    { 
        $egresado = User::find($id);
        $tramites = Tramite::where('egresado_id',Auth::id())->get();

        $pdf = \PDF::loadView('pdf.aval_asesores', compact('egresado'))->setOptions(['defaultFont' => 'sans-serif']);
       //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
    }

   public function imprimir_solicitud_integracion($id)
   { 
       $egresado = User::find($id);
       $pdf = \PDF::loadView('pdf.solicitud_de_integracion_jurado',compact('egresado'))->setOptions(['defaultFont' => 'sans-serif']);
      //return view('pdf.aval_de_academia');
       return $pdf->stream('ejemplo.pdf');
  }
  public function imprimir_aviso_de_acto($id)
  { 
    $egresado = User::find($id);
      $pdf = \PDF::loadView('pdf.aviso_acto',compact('egresado'))->setOptions(['defaultFont' => 'sans-serif']);
     //return view('pdf.aval_de_academia');
      return $pdf->stream('ejemplo.pdf');
 }
 public function imprimir_aviso_de_hora_actoRecep($id)
  { 
    $egresado = User::find($id);
      $pdf = \PDF::loadView('pdf.aviso_hora_acto',compact('egresado'))->setOptions(['defaultFont' => 'sans-serif']);
     //return view('pdf.aval_de_academia');
      return $pdf->stream('ejemplo.pdf');
 }

 public function imprimir_liberacion_asesorias($id)
  {
    $egresado = User::find($id); 
      $pdf = \PDF::loadView('pdf.aviso_hora_acto',compact('egresado'))->setOptions(['defaultFont' => 'sans-serif']);
     //return view('pdf.aval_de_academia');
      return $pdf->stream('ejemplo.pdf');
 }
 public function imprimir_DGP()
  { 
      $pdf = \PDF::loadView('pdf.DGP-DR-01')->setOptions(['defaultFont' => 'sans-serif']);
     //return view('pdf.aval_de_academia');
      return $pdf->stream('ejemplo.pdf');
 }
 
 

  
    
}
