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
    public function subproto()
    {
       
    }

    public function juramento()
    {
        return view('admin.juramento');
    }
//prueba de subida para juramento
    public function subjura(Request $request)
    {
        $juramento = Juramento::create([
            'uuid' => (string) Str::orderedUuid(),
            'titulo' => $request->titulo,
        ]);
        if($request->hasFile('formato'))
        {
            $image = $request->file('formato')->getClientOriginalName();
            $request->file('formato')
                ->storeAs('subfolder/' . $juramento->id, $image);
            $juramento->update(['formato' => $image]);
        }
        return redirect()->route('admin.subidaJuramento');

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
