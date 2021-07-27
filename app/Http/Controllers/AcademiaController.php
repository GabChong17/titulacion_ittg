<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Tramite;

class AcademiaController extends Controller
{
    public function liberacion()
    {
        $tramites = Tramite::where('egresado_id',Auth::id())->get();
        
        return view('academia.liberacion', compact('tramites'));
    }
}
