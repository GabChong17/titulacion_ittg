<?php

namespace App\Http\Controllers;

use App\Models\Egresado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


class EgresadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $egresado = Egresado::where('id','=', session('LoggedUser'))->first() ;  
        return view('egresados.index',compact('egresado') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aval()
    {
        $datos2['egresados']=Egresado::paginate(5);
        return view('egresados.aval', $datos2);
    }
    public function edit( $id)
    {
        $egresado=Egresado::findOrFail($id );

        return view('empleado.editEgresado', compact('egresado'));
    }
    public function destroy( $id)
    {
        //
        $egresado=Egresado::findOrFail($id);
     
            Egresado::destroy($id);        

        return redirect('/avances')->with('mensaje','Egresado Borrado');
    }

}
