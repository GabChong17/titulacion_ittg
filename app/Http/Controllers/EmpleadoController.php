<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['empleados']=Empleado::paginate(5);
        return view('empleado.index', $datos);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosEmpleado = request()->all();


        $campos=[
            'Nombre'=>'required|string|max:100',
            'APaterno'=>'required|string|max:100',
            'AMaterno'=>'required|string|max:100',
            'email'=>'required|email',
            'Foto'=>'required|max:10000|mimes:jpg, png, jpeg',
            'Telefono'=>'required|unique:empleados',
            'password'=>'required|min:5|max:12',


            
        ];
        $mensaje=[
                'required'=>'El :attribute es required',
                'Foto.requerid'=>'La foto es requerida'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosEmpleado = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosEmpleado['Foto']= $request->file('Foto')->store('uploads','public');
        }
        $datosEmpleado['password'] = Hash::make($request->password);
        Empleado::insert($datosEmpleado);

        //return response()->json($datosEmpleado);
        return redirect ('empleado')->with('mensaje','Empleado agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $empleado=Empleado::findOrFail($id );

        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

        $campos=[
            'Nombre'=>'required|string|max:100',
            'APaterno'=>'required|string|max:100',
            'AMaterno'=>'required|string|max:100',
            'email'=>'required|email|unique:empleados',
            'Foto'=>'required',
            'Telefono'=>'required|unique:empleados',
            'password'=>'required|min:5|max:12',

            
        ];
        $mensaje=[
                'required'=>'El :attribute es required',
                
        ];
        if($request->hasFile('Foto')){
            $campos=['Foto'=>'required|max:10000|mimes:jpg, png, jpeg',];
            $mensaje=['Foto.requerid'=>'La foto es requerida'];
        }
        $this->validate($request, $campos, $mensaje);



        $datosEmpleado = request()->except(['_token', '_method']);

        if($request->hasFile('Foto')){
            $empleado=Empleado::findOrFail($id);

            Storage::delete('public/'.$empleado->Foto);

            $datosEmpleado['Foto']= $request->file('Foto')->store('uploads','public');
        }


        Empleado::where('id','=',$id)->update($datosEmpleado);
        $empleado=Empleado::findOrFail($id);
        //return view('empleado.edit', compact('empleado'));

        return redirect('empleado')->with('mensaje','Empleado Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $empleado=Empleado::findOrFail($id);
        if(Storage::delete('public/'.$empleado->Foto)){
            Empleado::destroy($id); 
        }
        

        return redirect('empleado')->with('mensaje','Empleado Borrado');
    }
    public function getEmpleado()
    {
        return view('empleado.index');
    }
}
