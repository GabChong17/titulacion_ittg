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
        
        $users_tramite_iniciado = User::where('estado', '=', 'Tramite_iniciado')->get();


        return view('division.aval',compact('users_tramite_iniciado'));
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
    public function recepcion(Request $request)
    {

        $recepcion = request()->except(['_token']);
        $recepcion['egresado_id'] = Auth::id();
        Tramite::insert($recepcion);

        return redirect('/PaseLiberacion')->with('message', 'Cita de recepcion agregada!!');  
    }
    public function  actoRecepcion(Request $request)
    {

        $recepcion = request()->except(['_token']);
        $recepcion['egresado_id'] = Auth::id();
        Tramite::insert($recepcion);

        return redirect('/actoRecepcional')->with('message', 'Acto recepcional agendado');  
    }
    public function asesores($id)
    {
        
        $egresado = User::find($id);

        return view('division.solicitarAsesor',  compact('egresado'));
        
    }
    public function pase_liberacion($id)
    {
        $egresado = User::find($id);
        $tramites = Tramite::where('egresado_id',Auth::id())->get();

        return view('division.paseLiberacion',compact('tramites','egresado'));        
    }
    public function recepcion_acto()
    {
        $egresado = User::where('rol', 'egresado')->get();

        return view('division.acto_recep', compact('egresado'));
    }
    public function jurado2($id)
    {
        $egresado = User::find($id);

        return view('division.jurado_integracion', compact('egresado'));
    }


    public function consultas(){
        return view('division.aval', compact('users'));
    }

    
}
