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

        return view('academia.solicitudAsesor', compact('egresado'));   
    }

    public function firmas(Request $request)
    {
        $request->file('firmas')->store('firmas','public');
        return redirect('/academiaAsesor')->with('message', 'Documento subido');
        // return redirect()->back()->with('message', 'Documento subido');  
        
    }
    public function asignar_asesor($id)
    {
        $egresado = User::find($id);
        $asesor = User::where('rol', 'asesor')->get();
        $revisor = User::where('rol', 'asesor')->get();
        $revisor2 = User::where('rol', 'asesor')->get();
       

        return view('academia.asignarAsesor', compact('asesor','egresado','revisor','revisor2')); 
        
    }
    public function asesoria_liberada($id)
    {
        $egresado = User::find($id);
        return view('academia.asesorialiberada',compact('egresado'));
       
    }
}
