<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Plan;
use App\Models\Opcion;
use App\Models\Requisitoso;
use App\Models\Empleado;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('egresado',['only'=> ['index']]);
    // }
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return('TEST');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $plan = Plan::find($id);
    //     $data = $request->only('Nombre');
    //     $plan->update($data);
    //     return redirect()->route('TablaPlanes', $plan->id)->with('success', 'Plan actualizado correctamente');
    // }

    public function update(Request $request,  $id)
    {
        $plan = Plan::find($id);
        $data = $request->only('Nombre');
        $plan->update($data);
        return redirect()->route('admin')->with('success', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function users()
    {
        // admin','egresado','division','jefatura','academia','escolares','asesor
        $egresados = User::orderBy('id', 'asc')->get();
        $admins = User::where('rol', 'admin')->get();
        $divisiones = User::where('rol', 'division')->get();
        $jefaturas = User::where('rol', 'jefatura')->get();
        $academias = User::where('rol', 'academia')->get();
        $escolaress = User::where('rol', 'escolares')->get();
        $asesores = User::where('rol', 'asesor')->get();

        return view('admin.tablaUsers', compact('egresados','admins','divisiones','jefaturas','academias','escolaress','asesores'));
    }

    public function planes()
    {
        $Planes = Plan::orderBy('id', 'asc')->get();
        return view('admin.tablaPlanes',compact('Planes'));
    }
    public function opciones()
    {
        $Opciones = Opcion::orderBy('id', 'asc')->get();
        return view('admin.tablaOpciones',compact('Opciones'));
    }
    
    public function requisitos()
    {
       
        $Requisitoso = Requisitoso::orderBy('id', 'asc')->get();
        return view('admin.tablaRequisitos',compact('Requisitoso'));
        
    }   
    
}
