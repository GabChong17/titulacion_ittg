<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egresado;
use App\Models\Empleado;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }

    

    public function aval()
    {
        $aval['egresado']=Egresado::paginate(5);
        return view('egresados.aval', $aval);
    }

    

    function save(Request $request){
       //return $request->input(); 
        //validate request 
        $request->validate([

            'NoControl'=>'required|unique:egresados',
            'Nombre'=>'required',
            'APaterno'=>'required',
            'AMaterno'=>'required',
            'Carrera'=>'required',
            'Campus'=>'required',
            'PlanDeEstudios'=>'required',
            'email'=>'required|email|unique:egresados',
            'Telefono'=>'required|unique:egresados',
            'password'=>'required|min:5|max:12',


        ]);

        //insert data into database
        $egresado = new Egresado;
        $egresado->NoControl = $request->NoControl;
        $egresado->Nombre = $request->Nombre;
        $egresado->APaterno = $request->APaterno;
        $egresado->AMaterno = $request->AMaterno;
        $egresado->Carrera = $request->Carrera;
        $egresado->Campus = $request->Campus;
        $egresado->PlanDeEstudios = $request->PlanDeEstudios;
        $egresado->email = $request->email;
        $egresado->Telefono = $request->Telefono;
        $egresado->password = Hash::make($request->password);
        $save = $egresado->save(); 

        if($save){
            return back()->with('success','Nuevo Usuario registrado con exito!');
        }else{
            return back()->with('fail','Algo salio mal, vuelve a intentarlo.');
        }
    }

    function check(Request $request){
        //return $request->input();
        //Validate requests
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
       ]);

       $userInfo = Egresado::where('email','=', $request->email)->first();
       $userInfo2 = Empleado::where('email','=', $request->email)->first();

        if(!$userInfo){
            if(!$userInfo2){
                return back()->with('fail','No reconocemos su correo electronico.');
            }else{
                if(Hash::check($request->password, $userInfo2->password)){
                    $request->session()->put('LoggedUser', $userInfo2->id);
                    return redirect('empleado');
                }else{
                    return back()->with('fail','Contraseña incorrecta.');
                }
            }
            //if (!$userInfo2){
           // return back()->with('fail','No reconocemos su correo electronico.');
        }else{
           //check password
           if(Hash::check($request->password, $userInfo->password)){
               $request->session()->put('LoggedUser', $userInfo->id);
               return redirect('admin/dashboard');
           }else{
               return back()->with('fail','Contraseña incorrecta.');
                }
            }
        }


   function logout(){
    if(session()->has('LoggedUser')){
        session()->pull('LoggedUser');
        return redirect('/auth/login');
        }
    }

   function dashboard(){
    $egresado = Egresado::where('id','=', session('LoggedUser'))->first() ;
    return view('admin.dashboard',compact('egresado') );
    }

    function settings(){
        $data = ['LoggedUserInfo'=>Egresado::where('id','=', session('LoggedUser'))->first()];
        return view('admin.settings', $data);
    }

    function profile(){
        $data = ['LoggedUserInfo'=>Egresado::where('id','=', session('LoggedUser'))->first()];
        return view('admin.profile', $data);
    }
    function staff(){
        $data = ['LoggedUserInfo'=>Egresado::where('id','=', session('LoggedUser'))->first()];
        return view('admin.staff', $data);
    }
/*
    function index(){
        $data = ['LoggedUserInfo'=>Egresado::where('id','=', session('LoggedUser'))->first()];
        return view('egresados.index', $data);
        }*/
/*
    public function index()
        {
            return view('empleado.index');
        }*/
}

