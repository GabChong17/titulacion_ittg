<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class EmpleadoController extends Controller
{
    public function empleado()
    {
        return view('empleados.empleado');
    }

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('empleados.empleado');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'a_paterno' => 'required|string|max:255',
            'a_materno' => 'required|string|max:255',
            'departamento' => 'required|string|max:255',
            'carrera' => 'required|string|max:255',
            'campus' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telefono'=>'required|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $empleado = Empleado::create([
            'name' => $request->name,
            'a_paterno'=>$request->a_paterno,
            'a_materno'=>$request->a_materno,
            'departamento'=>$request->departamento,
            'carrera'=>$request->carrera,
            'campus'=>$request->campus,
            'email' => $request->email,
            'telefono'=>$request->telefono,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($empleado));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}


