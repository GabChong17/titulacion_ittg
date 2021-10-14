<?php

namespace App\Http\Controllers;

use App\Models\User;
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
//prueba de subida para protocolo
    public function subproto(Request $request)
    {
        
    }

    public function juramento()
    {
        return view('admin.subidaJuramento');
    }
//prueba de subida para juramento
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
            // 'cedula' => 'required|string|max:25',
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
            // 'cedula'=>$request->cedula,
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
        // abort_if(Gate::denies('user_edit'), 403);
        // $roles = Role::all()->pluck('name', 'id');
        // $empelado->load('roles');
        return view('admin.edit', compact('empelado'));
    }
    public function update(Request $request,  $id)
    {
        // $user=User::findOrFail($id);
        $empelado = User::find($id);
        $data = $request->only('name', 'a_paterno', 'a_materno', 'profesion', 'rol', 'carrera', 'campus', 'email','telefono','cedula');
        // $password=$request->input('password');
        // if($password)
        //     $data['password'] = bcrypt($password);
        if(trim($request->password)=='')
        {
            $data=$request->except('password');
        }
        else{
            $data=$request->all();
            $data['password']=bcrypt($request->password);
        }
        

        $empelado->update($data);
        return redirect()->route('TablaUsers', $empelado->id)->with('success', 'Usuario actualizado correctamente');
    }
    public function destroy(User $empelado)
    {
        // abort_if(Gate::denies('user_destroy'), 403);

        // if (auth()->user()->id == $empelado->id) {
        //     return redirect()->route('users.index');
        // }

        
        // $admin->delete();
        $empelado->delete();
        // $divison->delete();
        // $jefatura->delete();
        // $academia->delete();
        
        return back()->with('succes', 'Usuario eliminado correctamente');
    }
}
