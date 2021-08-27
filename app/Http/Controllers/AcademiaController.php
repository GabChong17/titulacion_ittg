<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Egresado;
use App\Models\User;
use App\Models\Tramite;


class AcademiaController extends Controller
{
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

    public function revisor()
    {
        return view('academia.solicitudRevisor');
    }
}
