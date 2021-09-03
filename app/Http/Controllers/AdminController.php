<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Str;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }

    public function protocolo()
    {
        return view('admin.subidaProtocolo');
    }
//prueba de subida para protocolo
    public function subproto(Request $request)
    {
        
    }

    public function juramento()
    {
        return view('admin.subidaJuramento');
    }
//prueba de subida para juramento
    public function subjura(Request $request)
    {
        return redirect()->route('admin.subidaJuramento');

    }
   
    public function agrega()
    {
        return view('admin.agregarUsers');
    }
    public function division()
    {
        return view('admin.division');
    }

    public function jefatura()
    {
        return view('admin.jefatura');
    }

    public function academia()
    {
        return view('admin.academia');
    }

    public function escolares()
    {
        return view('admin.escolares');
    }
}
