<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use App\Models\Requisito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Opcion;
use App\Models\Egresado;
use App\Models\User;
use DB;
 


class EgresadoController extends Controller
{
    public function inicio()
    {
        $egresado = User::where('rol', 'egresado')->get();

        $plan93 = User::where('planDeestudios', '=', '1')->get();
        $plan2004 = User::where('planDeestudios', '=', '2')->get();
      

         return view('dashboard',compact('plan93','plan2004'));
    }
    public function tramite1(Request $request)
    {
        $valores = $request->all();
        $requisito = new Requisito();

        $requisito->opcion=1;
        $requisito->egresado_id=Auth::user()->id;
        $requisito->save();
        $isAdmin = 1;
         return view('egresado.tramite',  compact('isAdmin'));
    }
    public function tramite2(Request $request)
    {
        $valores = $request->all();
        $requisito = new Requisito();

        $requisito->opcion=2;
        $requisito->egresado_id=Auth::user()->id;
        $requisito->save();
        $isAdmin = 2;
        return view('egresado.tramite',  compact('isAdmin'));
    }
    public function tramite3(Request $request)
    {
        $valores = $request->all();
        $requisito = new Requisito();

        $requisito->opcion=3;
        $requisito->egresado_id=Auth::user()->id;
        $requisito->save();
        $isAdmin = 3;
        return view('egresado.tramite',  compact('isAdmin'));
    }
    public function tramite4(Request $request)
    {
        $valores = $request->all();
        $requisito = new Requisito();

        $requisito->opcion=4;
        $requisito->egresado_id=Auth::user()->id;
        $requisito->save();
        $isAdmin = 4;
        return view('egresado.tramite',  compact('isAdmin'));
    }
    public function tramite5(Request $request)
    {
        $valores = $request->all();
        $requisito = new Requisito();

        $requisito->opcion=5;
        $requisito->egresado_id=Auth::user()->id;
        $requisito->save();
        $isAdmin = 5;
        return view('egresado.tramite',  compact('isAdmin'));
    }
    public function tramite6(Request $request)
    {
        $valores = $request->all();
        $requisito = new Requisito();

        $requisito->opcion=6;
        $requisito->egresado_id=Auth::user()->id;
        $requisito->save();
        $isAdmin = 6;
        return view('egresado.tramite',  compact('isAdmin'));
    }
    public function tramite7(Request $request)
    {
        $valores = $request->all();
        $requisito = new Requisito();

        $requisito->opcion=7;
        $requisito->egresado_id=Auth::user()->id;
        $requisito->save();
        $isAdmin = 7;
        return view('egresado.tramite',  compact('isAdmin'));
    }
    public function tramite8(Request $request)
    {
        $valores = $request->all();
        $requisito = new Requisito();

        $requisito->opcion=8;
        $requisito->egresado_id=Auth::user()->id;
        $requisito->save();
        $isAdmin = 8;
        return view('egresado.tramite',  compact('isAdmin'));
    }
    public function tramite9(Request $request)
    {
        $valores = $request->all();
        $requisito = new Requisito();

        $requisito->opcion=9;
        $requisito->egresado_id=Auth::user()->id;
        $requisito->save();
        $isAdmin = 9;
        return view('egresado.tramite',  compact('isAdmin'));
    }
    public function tramite10(Request $request)
    {
        $valores = $request->all();
        $requisito = new Requisito();

        $requisito->opcion=10;
        $requisito->egresado_id=Auth::user()->id;
        $requisito->save();
        $isAdmin = 10;
        return view('egresado.tramite',  compact('isAdmin'));
    }
    //
    public function tramite11(Request $request)
    {
        $valores = $request->all();
        $requisito = new Requisito();

        $requisito->opcion=11;
        $requisito->egresado_id=Auth::user()->id;
        $requisito->save();
        $isAdmin = 11;
        return view('egresado.tramite',  compact('isAdmin'));
    }
    public function tramite12(Request $request)
    {
        $valores = $request->all();
        $requisito = new Requisito();

        $requisito->opcion=12;
        $requisito->egresado_id=Auth::user()->id;
        $requisito->save();
        $isAdmin = 12;
        return view('egresado.tramite',  compact('isAdmin'));
    }
    public function tramite13(Request $request)
    {
        $valores = $request->all();
        $requisito = new Requisito();

        $requisito->opcion=13;
        $requisito->egresado_id=Auth::user()->id;
        $requisito->save();
        $isAdmin = 13;
        return view('egresado.tramite',  compact('isAdmin'));
    }
    public function tramite14(Request $request)
    {
        $valores = $request->all();
        $requisito = new Requisito();

        $requisito->opcion=14;
        $requisito->egresado_id=Auth::user()->id;
        $requisito->save();
        $isAdmin = 14;
        return view('egresado.tramite',  compact('isAdmin'));
    }
    public function tramite15(Request $request)
    {
        $valores = $request->all();
        $requisito = new Requisito();

        $requisito->opcion=15;
        $requisito->egresado_id=Auth::user()->id;
        $requisito->save();
        $isAdmin = 15;
        return view('egresado.tramite',  compact('isAdmin'));
    }
    
    public function store1(Request $request)
    {

        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=1;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);

        //Almacena Requisito 2
        $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
        $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);

         //Almacena Requisito 3
         $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
         $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);

        $tramite->save();
        $opcion = Opcion::find(1);

        return redirect('/crearCita/confirm');  
    }
    public function store2(Request $request)
    {

        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=2;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);

        //Almacena Requisito 2
        $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
        $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);

         //Almacena Requisito 3
         $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
         $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);

        $tramite->save();
        $opcion = Opcion::find(2);

        return redirect('/crearCita/confirm');  
    }
    public function store3(Request $request)
    {

        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=3;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);

        //Almacena Requisito 2
        $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
        $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);

         //Almacena Requisito 3
         $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
         $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);
          //Almacena Requisito 4
          $tramite['requisito4'] = $request->file('requisito4')->getClientOriginalName();
          $request->file('requisito4')->storeAs('public/tramites/', $tramite['requisito4']);

        $tramite->save();
        $opcion = Opcion::find(3);

        return redirect('/crearCita/confirm');  
    }
    public function store4(Request $request)
    {

        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=4;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);

        //Almacena Requisito 2
        $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
        $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);

         //Almacena Requisito 3
         $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
         $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);

        $tramite->save();
        $opcion = Opcion::find(4);

        return redirect('/crearCita/confirm');  
    }
    public function store5(Request $request)
    {

        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=5;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);

        //Almacena Requisito 2
        $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
        $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);

         //Almacena Requisito 3
         $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
         $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);

        $tramite->save();
        $opcion = Opcion::find(5);

        return redirect('/crearCita/confirm');  
    }
    public function store6(Request $request)
    {

        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=6;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);

        $tramite->save();
        $opcion = Opcion::find(6);

        return redirect('/crearCita/confirm');  
    }
    public function store7(Request $request)
    {

        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=7;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);
        //Almacena Requisito 2
        $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
        $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);
         //Almacena Requisito 3
         $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
         $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);
         //Almacena Requisito 4
         $tramite['requisito4'] = $request->file('requisito4')->getClientOriginalName();
         $request->file('requisito4')->storeAs('public/tramites/', $tramite['requisito4']);
         //Almacena Requisito 5
         $tramite['requisito5'] = $request->file('requisito5')->getClientOriginalName();
         $request->file('requisito5')->storeAs('public/tramites/', $tramite['requisito5']);
         //Almacena Requisito 6
         $tramite['requisito6'] = $request->file('requisito6')->getClientOriginalName();
         $request->file('requisito6')->storeAs('public/tramites/', $tramite['requisito6']);

        $tramite->save();
        $opcion = Opcion::find(7);

        return redirect('/crearCita/confirm');  
    }
    public function store8(Request $request)
    {

        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=8;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);

        //Almacena Requisito 2
        $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
        $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);

         //Almacena Requisito 3
         $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
         $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);

        $tramite->save();
        $opcion = Opcion::find(8);

        return redirect('/crearCita/confirm');  
    }
    public function store9(Request $request)
    {

        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=9;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);

        //Almacena Requisito 2
        $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
        $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);

         //Almacena Requisito 3
         $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
         $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);

        $tramite->save();
        $opcion = Opcion::find(9);

        return redirect('/crearCita/confirm');  
    }
    public function store10(Request $request)
    {

        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=10;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);
        //Almacena Requisito 2
        $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
        $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);
         //Almacena Requisito 3
         $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
         $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);
         //Almacena Requisito 4
         $tramite['requisito4'] = $request->file('requisito4')->getClientOriginalName();
         $request->file('requisito4')->storeAs('public/tramites/', $tramite['requisito4']);


        $tramite->save();
        $opcion = Opcion::find(10);

        return redirect('/crearCita/confirm');  
    }
    public function store11(Request $request)
    {

        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=11;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);

        //Almacena Requisito 2
        $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
        $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);

         //Almacena Requisito 3
         $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
         $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);

        $tramite->save();
        $opcion = Opcion::find(11);

        return redirect('/crearCita/confirm');  
    }
    public function store12(Request $request)
    {

        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=12;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);

        //Almacena Requisito 2
        $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
        $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);

         //Almacena Requisito 3
         $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
         $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);
         //Almacena Requisito 4
         $tramite['requisito4'] = $request->file('requisito4')->getClientOriginalName();
         $request->file('requisito4')->storeAs('public/tramites/', $tramite['requisito4']);

        $tramite->save();
        $opcion = Opcion::find(12);

        return redirect('/crearCita/confirm');  
    }
    public function store13(Request $request)
    {

        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=13;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);

       
        $tramite->save();
        $opcion = Opcion::find(13);

        return redirect('/crearCita/confirm');  
    }
    public function store14(Request $request)
    {

        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=14;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);

        //Almacena Requisito 2
        $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
        $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);

         //Almacena Requisito 3
         $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
         $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);

        $tramite->save();
        $opcion = Opcion::find(14);

        return redirect('/crearCita/confirm');  
    }
    public function store15(Request $request)
    {

        $valores = $request->all();
       
        $tramite = new Tramite();
        $tramite->fill($valores);
        $tramite->opciones_id=15;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"

        
        //"proceso_exisoto" es parte para hacer uso del GATE
        $tramite->proceso_exitoso=1;
        //$fileName = Str::slug(getClientOriginalName());

        //Almacena Requisito 1
        $tramite['requisito1'] = $request->file('requisito1')->getClientOriginalName();
        $request->file('requisito1')->storeAs('public/tramites', $tramite['requisito1']);

        //Almacena Requisito 2
        $tramite['requisito2'] = $request->file('requisito2')->getClientOriginalName();
        $request->file('requisito2')->storeAs('public/tramites/', $tramite['requisito2']);

         //Almacena Requisito 3
         $tramite['requisito3'] = $request->file('requisito3')->getClientOriginalName();
         $request->file('requisito3')->storeAs('public/tramites/', $tramite['requisito3']);
          //Almacena Requisito 4
          $tramite['requisito4'] = $request->file('requisito4')->getClientOriginalName();
          $request->file('requisito4')->storeAs('public/tramites/', $tramite['requisito4']);
 

        $tramite->save();
        $opcion = Opcion::find(15);

        return redirect('/crearCita/confirm');  
    }

   
    public function confirmar($id)
    {
        $egresado = User::find($id);
        $egresado->estado = 'Cita_Agendada';
        $egresado->save();

        return redirect('/inicio')->with('message', 'Cita guardada.');  

    }

    public function agendada(Request $request)
    {
        $cita = request()->except(['_token']);
        //actualizar el tramite para ponerle la fecha y hora       
        //detalle
        //le cambio al tramite el estado a "CITA AGENDADA"
        $cita['egresado_id'] = Auth::id();
        Tramite::insert($cita);

    }
    public function crearCita (Request $request, $id) 
    {
        //aqui debes agregar el tramite
        
        $tramite = new Tramite();
        $tramite->opciones_id= $id;
        $tramite->egresado_id=Auth::user()->id;//nombre de la variable de autentificacion "user"
        $tramite->save();
 
         $opcion = Opcion::find($id);
         return view('egresado.tesis')->with('opcion',$opcion);;
     }


     public function imprimir_solicitud_autorizacion($id)
    {
        $egresado = User::find($id);
        $pdf = \PDF::loadView('pdf.autorizacion',compact('egresado'))->setOptions(['defaultFont' => 'sans-serif']);
       //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
   }
   

   

   
}
