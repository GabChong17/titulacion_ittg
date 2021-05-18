<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Models\Tramite;
use App\Models\Opcion;
use App\Models\Egresado;


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

    public function crearCita (Request $request, $id) {
        //aqui debes agregar el tramite
        
        
 
        $tramite = new Tramite();
        $tramite->opcion_id= $id;
        $tramite->egresado_id=$request->session()->get('LoggedUser');
        $tramite->save();
 
         $opcion = Opcion::find($id);
         return view('egresados.create')->with('opcion',$opcion);;
     }

}
