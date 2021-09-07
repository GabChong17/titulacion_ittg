<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Str;
use App\Models\Egresado;
use App\Models\User;
use App\Models\Tramite;

class JefaturaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('jefatura',['only'=> ['index']]);
    // }
    public function aval()
    {
        $egresado = User::orderBy('id', 'asc')->get();

        return view('jefatura.aval', ['egresado' => $egresado]);
    }

    public function asesoria()
    {
        $egresado = User::orderBy('id', 'asc')->get();

        return view('jefatura.asesoriaFinalizada', ['egresado' => $egresado]);
        
    }

    public function formato()
    {
        return view('jefatura.formatojurado');
    }

    public function integracion()
    {
        $egresado = User::orderBy('id', 'asc')->get();

        return view('jefatura.integracionjurado', ['egresado' => $egresado]);   
    }
}
