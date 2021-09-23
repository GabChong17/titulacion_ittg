<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class InicioControler extends Controller
{
    // public function _construct()
    // {
    //   $this->middleware('home');
    // }
    public function inicio(){
        $user = Auth::user();
        if(is_null($user))die;

        switch($user->rol){
            case 'admin':
                return view('admin.users.index');
                break;
            case 'egresado':
                return redirect('/inicio');            
                break;
            case 'division':
                return redirect('/division');            
                break;
            case 'jefatura':
                return view('admin.jefatura');
                break;
            case 'academia':
                return redirect('/academia');            
                break;
            case 'escolares':
                return view('admin.escolares');
                break;
            case 'asesor':
                return view ('admin.asesores');
                break;



        }

    }
}
// ['admin','egresado','division','jefatura','academia','escolares','asesor'