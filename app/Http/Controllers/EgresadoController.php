<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EgresadoController extends Controller
{
    public function tesis()
    {
        return view('egresado.tesis');
    }

    public function proyecto()
    {
        return view('egresado.proyecto');
    }

    public function prototipo()
    {
        return view('egresado.prototipo');
    }
}
