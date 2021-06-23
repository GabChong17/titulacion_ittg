<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egresado;

class AcademiaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function egresado()
    {
        return view('academia.liberacion');

        // $egresado = Egresado::where('id','=', session('LoggedUser'))->first() ;
        // return view('academia.liberacion',compact('egresado') );
    }

    
}
