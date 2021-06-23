<?php

namespace App\Http\Controllers;


use App\Models\Tramite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TramiteController extends Controller
{
    public function index()
    {
        $datos['tramites']=Tramite::paginate(5);
        return view('tramite.index', $datos);
    }

  
    public function create()
    {
        return view('tramite.create');
    }

   
    public function store(Request $request)
    {
       
       

        $campos=[
            'estado'=>'required|string|max:100',
            'NoControl'=>'required|string|max:100',
            'Nombre'=>'required|string|max:100',
            'Carrera'=>'required|string|max:100',
            'opcion'=>'required|string|max:100',
            'liberacion'=>'required|string|max:100',
            'Foto'=>'required|max:10000|mimes:jpg, png, jpeg',
        ];
        $mensaje=[
                'required'=>'El :attribute es required',
                'Foto.requerid'=>'La foto es requerida'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosTramite = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosTramite['Foto']= $request->file('Foto')->store('uploads','public');
        }

        Tramite::insert($datosTramite);

        //return response()->json($datosEmpleado);
        return redirect ('tramite')->with('mensaje','Tramite agregado con exito');
    }

    
    public function show(Tramite $tramite)
    {
        //
    }

    
    public function edit( $id)
    {
        $tramite=Tramite::findOrFail($id );

        return view('tramite.edit', compact('tramite'));
    }

    
    public function update(Request $request,  $id)
    {

        $campos=[
            'estado'=>'required|string|max:100',
            'NoControl'=>'required|string|max:100',
            'Nombre'=>'required|string|max:100',
            'Carrera'=>'required|string|max:100',
            'opcion'=>'required|string|max:100',
            'liberacion'=>'required|string|max:100',
            
        ];
        $mensaje=[
                'required'=>'El :attribute es required',
                
        ];
        if($request->hasFile('Foto')){
            $campos=['Foto'=>'required|max:10000|mimes:jpg, png, jpeg',];
            $mensaje=['Foto.requerid'=>'La foto es requerida'];
        }
        $this->validate($request, $campos, $mensaje);



        $datosTramite = request()->except(['_token', '_method']);

        if($request->hasFile('Foto')){
            $tramite=Tramite::findOrFail($id);

            Storage::delete('public/'.$tramite->Foto);

            $datosTramite['Foto']= $request->file('Foto')->store('uploads','public');
        }


        Tramite::where('id','=',$id)->update($datosTramite);
        $tramite=Tramite::findOrFail($id);
        

        return redirect('tramite')->with('mensaje','Tramite Modificado');
    }

   
    public function destroy( $id)
    {
        //
        $tramite=Tramite::findOrFail($id);
        if(Storage::delete('public/'.$tramite->Foto)){
            Tramite::destroy($id); 
        }
        

        return redirect('tramite')->with('mensaje','Tramite Borrado');
    }
}
