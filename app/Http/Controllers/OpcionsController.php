<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egresado;
use App\Models\titulacion;
use App\Models\Empleado;
use Illuminate\Support\Facades\Hash;

class OpcionsController extends Controller
{

    public function inicio(){

        $opcions = App\Models\titulacion::all();

        return view('egresados.index', compact('opcions'));

    }

}
