<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Opcion;
use App\Models\Egresado;


class EgresadoController extends Controller
{


    

    public function tesis(Request $request)
    {
        
         return view('egresado.tesis');
    }

    public function proyecto()
    {
       
         return view('egresado.proyecto');
    }

    public function prototipo()
    {
       
         return view('egresado.prototipo');
    }

    public function storeTesis(Request $request)
    {
        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=1;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"
        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;

        $requisito1 = $request->file('requisito1');
        if(!is_null($requisito1)){
            $ruta_destino = public_path('/storage/requisitos/');
            $nombre_de_archivo = $requisito1->getClientOriginalName();
            $requisito1->move($ruta_destino, $nombre_de_archivo);
            $valores['requisito1']=$nombre_de_archivo;
        }

        $requisito2 = $request->file('requisito2');
        if(!is_null($requisito2)){
            $ruta_destino = public_path('/storage/requisitos/');
            $nombre_de_archivo = $requisito2->getClientOriginalName();
            $requisito2->move($ruta_destino, $nombre_de_archivo);
            $valores['requisito2']=$nombre_de_archivo;
        }

        $requisito3 = $request->file('requisito3');
        if(!is_null($requisito3)){
            $ruta_destino = public_path('/storage/requisitos/');
            $nombre_de_archivo = $requisito3->getClientOriginalName();
            $requisito3->move($ruta_destino, $nombre_de_archivo);
            $valores['requisito3']=$nombre_de_archivo;
        }

        $tramite->save();
        $opcion = Opcion::find(1);
        

            return redirect()->back()->with('message', 'Documento subido');  
    }

    public function storeProyecto(Request $request)
    {
        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=2;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"
        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;

        $requisito1 = $request->file('requisito1');
        if(!is_null($requisito1)){
            $ruta_destino = public_path('/storage/requisitos/');
            $nombre_de_archivo = $requisito1->getClientOriginalName();
            $requisito1->move($ruta_destino, $nombre_de_archivo);
            $valores['requisito1']=$nombre_de_archivo;
        }

        $requisito2 = $request->file('requisito2');
        if(!is_null($requisito2)){
            $ruta_destino = public_path('/storage/requisitos/');
            $nombre_de_archivo = $requisito2->getClientOriginalName();
            $requisito2->move($ruta_destino, $nombre_de_archivo);
            $valores['requisito2']=$nombre_de_archivo;
        }

        $requisito3 = $request->file('requisito3');
        if(!is_null($requisito3)){
            $ruta_destino = public_path('/storage/requisitos/');
            $nombre_de_archivo = $requisito3->getClientOriginalName();
            $requisito3->move($ruta_destino, $nombre_de_archivo);
            $valores['requisito3']=$nombre_de_archivo;
        }
        $opcion = Opcion::find(2); //no lo borres si sirve al final :v
        $tramite->save();
 
        

            return redirect()->back()->with('message', 'Documento subido');   
    }

    public function storePrototipo(Request $request)
    {
        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=3;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"
        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;

        $requisito1 = $request->file('requisito1');
        if(!is_null($requisito1)){
            $ruta_destino = public_path('/storage/requisitos/');
            $nombre_de_archivo = $requisito1->getClientOriginalName();
            $requisito1->move($ruta_destino, $nombre_de_archivo);
            $valores['requisito1']=$nombre_de_archivo;
        }

        $requisito2 = $request->file('requisito2');
        if(!is_null($requisito2)){
            $ruta_destino = public_path('/storage/requisitos/');
            $nombre_de_archivo = $requisito2->getClientOriginalName();
            $requisito2->move($ruta_destino, $nombre_de_archivo);
            $valores['requisito2']=$nombre_de_archivo;
        }

        $requisito3 = $request->file('requisito3');
        if(!is_null($requisito3)){
            $ruta_destino = public_path('/storage/requisitos/');
            $nombre_de_archivo = $requisito3->getClientOriginalName();
            $requisito3->move($ruta_destino, $nombre_de_archivo);
            $valores['requisito3']=$nombre_de_archivo;
        }
        $opcion = Opcion::find(3); //no lo borres si sirve al final :v
        $tramite->save();
 
        

            return redirect()->back()->with('message', 'Documento subido');   
    }




    public function crearCita (Request $request, $id) {
        //aqui debes agregar el tramite
        
        $tramite = new Tramite();
        $tramite->opciones_id= $id;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"
        $tramite->save();
 
         $opcion = Opcion::find($id);
         return view('egresado.tesis')->with('opcion',$opcion);;
     }
}
