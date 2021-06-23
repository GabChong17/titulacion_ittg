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
        return view('empleados.empleado', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.empleado');
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
            'name' => 'required|string|max:255',
            'a_paterno' => 'required|string|max:255',
            'a_materno' => 'required|string|max:255',
            'departamento' => 'required|string|max:255',
            'carrera' => 'required|string|max:255',
            'campus' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:empleados',
            'telefono'=>'required|unique:empleados',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
        $mensaje=[
                'required'=>'El :attribute es required',
                'Foto.requerid'=>'La foto es requerida'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosEmpleado = request()->except('_token');

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
    public function update(Request $request)
    {

        $campos=[
            'name' => 'required|string|max:255',
            'a_paterno' => 'required|string|max:255',
            'a_materno' => 'required|string|max:255',
            'departamento' => 'required|string|max:255',
            'carrera' => 'required|string|max:255',
            'campus' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:empleados',
            'telefono'=>'required|unique:empleados',
            'password' => 'required', 'confirmed',

            
        ];
        $mensaje=[
                'required'=>'El :attribute es required',
                
        ];

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
            Empleado::destroy($id); 
        
        

        return redirect('empleado')->with('mensaje','Empleado Borrado');
    }
    //public function getEmpleado(){
    //    return view('empleado.index');}
}