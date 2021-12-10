<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Plan;
use App\Models\Opcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use App\Http\Requests\UserEditRequest;




class AdminController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('administrador',['only'=> ['index']]);
    // }
    public function index()
    {
        return view('admin.index');
    }
    public function protocolo()
    {
        return view('admin.subidaProtocolo');
    }
    public function juramento()
    {
        return view('admin.subidaJuramento');
    }
    public function subjura(Request $request)
    {
        return redirect()->route('admin.subidaJuramento');
    }
   
    public function agrega2(Request $request)
    {
        $request->validate([
            
            'name' => 'required|string|max:255',
            'a_paterno' => 'required|string|max:255',
            'a_materno' => 'required|string|max:255',
            'profesion' => 'required|string|max:255',
            'rol'=>'required|string|max:255',
            'carrera' => 'required|string|max:255',
            'campus' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telefono'=>'required|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            
        ]);

        $user = User::create([
            
            'name' => $request->name,
            'a_paterno'=>$request->a_paterno,
            'a_materno'=>$request->a_materno,
            'profesion'=>$request->profesion,
            'rol'=>$request->rol,
            'carrera'=>$request->carrera,
            'campus'=>$request->campus,
            'email' => $request->email,
            'telefono'=>$request->telefono,
            'password' => Hash::make($request->password),
        ]);
        //return redirect()->back()->with('message', 'Empleado agregado.');
        return view('admin.users.index')->with('message', 'Empleado agregado.');  
    }
    public function agregaPlan2(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255'            
        ]);
        $plan = Plan::create([
            
            'Nombre' => $request->Nombre,
        ]);
        return redirect('/TablaPlanes')->with('success', 'Actualizado correctamente');  
    }
    public function agrega(Request $request)
    {
        return view('admin.agregarUsers');  
    }
    public function division()
    {
        return view('admin.division');
    }
    public function jefatura()
    {
        return view('admin.jefatura');
    }
    public function academia()
    {
        return view('admin.academia');
    }
    public function escolares()
    {
        return view('admin.escolares');
    }
    public function edit($id)
    {
        $empelado = User::find($id);
        return view('admin.edit', compact('empelado'));
    }
    public function editPlan($id)
    {
        $plan = Plan::find($id);
        return view('admin.editPlan', compact('plan'));
    }
    public function agregaPlan()
    {
        return view('admin.agregarPlan');
    }
    public function agregaOpcion()
    {
        $planes = Plan::all();
        return view('admin.agregaOpcion', compact('planes'));
    }
    public function agregaOpcion2(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Descripcion' => 'required|string|max:255',
            'Nombre' => 'required|string|max:255'            
        ]);
        $Opcion = Opcion::create([
            
            'Nombre' => $request->Nombre,
            'Descripcion'=>$request->Descripcion,
            'Planes_id'=>$request->Planes_id,
        ]);
        return redirect('/opcionesPlan')->with('success', 'Actualizado correctamente');
    }
    public function agregaRequisitos(Request $request, $id)
    {
         $opcion = Opcion::find($id);
        return view('admin.agregarRequisitos', compact('opcion'));
    }
    public function agregaRequisitos2(Request $request, $id)
    {
        $opcion = Opcion::find($id);
        $data = $request->only('requisito1', 'requisito2', 'requisito3', 'requisito4', 'requisito5', 'requisito6',);
        $opcion->update($data);
        return redirect('/opcionesPlan')->with('success', 'Actualizado correctamente');
    }
    
    public function update2(Request $request,  $id)
    {
        $plan = Plan::find($id);
        $data = $request->only('Nombre');
        $plan->update($data);
        return redirect('/TablaPlanes')->with('success', 'Actualizado correctamente');
    } 
    public function update3(Request $request,  $id)
    {
        $opcion = Opcion::find($id);
        $data = $request->only('Nombre', 'Descripcion');
        $opcion->update($data);
        return redirect('/opcionesPlan')->with('success', 'Actualizado correctamente');
    }
    public function update(Request $request,  $id)
    {
        $empelado = User::find($id);
        $data = $request->only('name', 'a_paterno', 'a_materno', 'profesion', 'rol', 'carrera', 'campus', 'email','telefono','cedula');
        if(trim($request->password)=='')
        {
            $data=$request->except('password');
        }
        else{
            $data=$request->all();
            $data['password']=bcrypt($request->password);
        }
        $empelado->update($data);
        return redirect('/admin')->with('success', 'Actualizado correctamente');
    }
    public function actualizarPlan(Request $request, $id)
    {
        $plan = Plan::find($id);
        $data = $request->only('Nombre');
        $plan->update($data);
        return redirect()->route('TablaPlanes', $plan->id)->with('success', 'Plan actualizado correctamente');
    }

    public function editarOpcion(Request $request, $id)
    {
         $opcion = Opcion::find($id);
        return view('admin.editOpcion', compact('opcion'));
    }

    
    public function destroy(User $empelado, Plan $plan, Opcion $opcion)
    {
        $plan->delete(); 
        $empelado->delete();
        $opcion->delete();
        return back()->with('succes', 'Eliminado correctamente');
    }
    

    
}
