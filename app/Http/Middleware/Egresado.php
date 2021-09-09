<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Administrador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
 public function handle(Request $request, Closure $next)
    {
        switch(auth::user()->rol){
            case ('egresado'):
                return $next($request);//si es egresado continua al HOME
            break;
			case('admin'):
                return redirect('admin');//ruta para un administrador
			break;	
            case ('division'):
                return redirect('division');//ruta para divison
            break;
            case ('jefatura'):
                return redirect('jefatura');//ruta para jefatura
            break;
            case ('academia'):
                return redirect('academia');//ruta para academia
            break;
            case ('escolares'):
                return redirect('escolares');//ruta para escolares
            break;
            case ('asesor'):
                return redirect('asesor');//ruta para asesor
            break;
        }
    }
}
