<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Str;

class JefaturaController extends Controller
{
    public function aval()
    {
        return view('jefatura.aval');
    }

    public function asesoria()
    {
        return view('jefatura.asesoriaFinalizada');
    }

    public function formato()
    {
        return view('jefatura.formatojurado');
    }

    public function integracion()
    {
        return view('jefatura.integracionjurado');
    }
}
