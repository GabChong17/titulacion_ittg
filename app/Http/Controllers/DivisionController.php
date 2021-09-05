<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Egresado;
use App\Models\User;
use App\Models\Tramite;
 
class DivisionController extends Controller
{
    public function pase()
    {
        $egresado = User::orderBy('id', 'asc')->get();
        $tramites = Tramite::where('egresado_id',Auth::id())->get();

        return view('division.liberacion',compact('tramites'), ['egresado' => $egresado]);

    }
    public function aval(Egresado $egresado)
    {
        $egresado = User::orderBy('id', 'asc')->get();

        return view('division.aval', ['egresado' => $egresado]);
    }
    public function acto()
    {
        $egresado = User::orderBy('id', 'asc')->get();
        $tramites = Tramite::where('egresado_id',Auth::id())->get();

        return view('division.actorecepcional',compact('tramites'), ['egresado' => $egresado]);
    }
    public function formato()
    {
        return view('division.formato');
    }
    public function noincoveniencia()
    {
        $egresado = User::orderBy('id', 'asc')->get();

        return view('division.noincoveniencia', ['egresado' => $egresado]);
    }
    public function jurado()
    {
        $egresado = User::orderBy('id', 'asc')->get();

        return view('division.jurado', ['egresado' => $egresado]);
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
}
