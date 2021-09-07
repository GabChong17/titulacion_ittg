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



class AcademiaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('academia',['only'=> ['index']]);
    // }
    public function liberacion()
    {
        $tramites = Tramite::where('egresado_id',Auth::id())->get();
        
        return view('academia.liberacion', compact('tramites'));
    }

    public function asesor()
    {
        $egresado = User::orderBy('id', 'asc')->get();

        return view('academia.solicitudAsesor', ['egresado' => $egresado]);   
    }

    public function firmas(Request $request)
    {
        $request->file('firmas')->store('firmas','public');
        return redirect('/academiaAsesor')->with('message', 'Documento subido');
        // return redirect()->back()->with('message', 'Documento subido');  
        
    }
    public function asignar_asesor()
    {
        $egresado = User::orderBy('id', 'asc')->get();

        return view('academia.asignarAsesor', ['egresado' => $egresado]); 
        
    }
    public function asesoria_liberada()
    {
        $egresado = User::orderBy('id', 'asc')->get();

        return view('academia.asesorialiberada', ['egresado' => $egresado]); 
       
    }
}
