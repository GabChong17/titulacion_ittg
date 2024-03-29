<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Egresado;
use App\Models\User;
use App\Models\Tramite;
use App\Models\Opcion;
use App\Models\Jurado;
use DB;
use App\Models\Asesor;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificacionEgresado;


 
class DivisionController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('division',['only'=> ['index']]);
    // }
    public function pase()
    {
        $egresado = User::where('rol', 'egresado')->get();
        $tramites = Tramite::where('egresado_id',Auth::id())->get();
        
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_revision_escolares = DB::select("SELECT estado from users where estado = 'Revision_Escolares'");
        
        $users_asesoria_liberada = User::where('estado', '=', 'Asesoria_Liberada')->get();
        return view('division.liberacion',compact('tramites','users_asesoria_liberada'));
    }

    public function aval()
    {
        $egresado = User::where('rol', 'egresado')->get();
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_revision_escolares = DB::select("SELECT estado from users where estado = 'Revision_Escolares'");
        
        $users_cita_agendada = User::where('estado', '=', 'Cita_Agendada')->get();
        return view('division.aval',compact('users_cita_agendada'));
    }


    public function acto()
    {
        $egresado = User::where('rol', 'egresado')->get();
        $tramites = Tramite::where('egresado_id',Auth::id())->get();
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_revision_escolares = DB::select("SELECT estado from users where estado = 'Revision_Escolares'");
        
        $users_no_incoveniencia = User::where('estado', '=', 'No_Incoveniencia')->get();

        return view('division.actorecepcional',compact('egresado','users_no_incoveniencia'));

    }
    public function formato()
    {
        return view('division.formato');
    }
    public function noincoveniencia()
    {
        $egresado = User::where('rol', 'egresado')->get();

        return view('division.noincoveniencia', compact('egresado'));
    }
    public function jurado()
    {
        
        $egresado = User::where('rol', 'egresado')->get();
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_revision_escolares = DB::select("SELECT estado from users where estado = 'Revision_Escolares'");
        
        $users_jurado_asignado = User::where('estado', '=', 'Jurado_Asignado')->get();

        return view('division.jurado',compact('egresado','users_jurado_asignado'));
    }

    public function recepcion(Request $request, $id)
    {
        $egresado = User::find($id);
        $egresado->estado = 'Revision_Escolares';
        $egresado->save();

        $recepcion = request()->except(['_token']);
        $recepcion['egresado_id'] = Auth::id();

        //Inicias como alumno => Auth::id();
        //Inicias como docente = Auth::id();

       /*  dd($egresado); */
        //LA linea 96 guarda el id del usuario en la columna de la tabla "User" llamada "egresado_id

        //$recepcion es un arreglo, es una colección = usuario que está haciendo la recepcion

       // $tramite_asignacion_id = new Tramite;
        
    

       Tramite::insert($recepcion);

        $correo = new NotificacionEgresado;
        $egresado = User::find($id);
        Mail::to($egresado)->send($correo);

        return redirect('/PaseLiberacion')->with('message', 'Cita de recepcion agregada!!');  
    }

    public function agregarIdestudianteaRecepcion(Request $request, $id)
    {
        //cambia el estado 
        $egresado = User::find($id);
        $egresado->estado = 'Revision_Escolares';
        $egresado->save(); 
        //asigna valor en "recepcion" en la tabla tramites
        $egresado = User::find($id);
        $recepcion = request()->except(['_token']);
        $recepcion['recepcion'] = $egresado->id;

        //Se obtiene del input con valor "recepcion" los valores del "calendario"
        //Y se almacena en la variable fecha_recepcion
        $fecha_recepcion = $request->input('recepcion');

        //Una vez obtenida la variable se hace la consulta
        //En el modelo tramite, donde el campo del egresado_id es IGUAL AL EGRESADO que se busca al inicio de la funcion
        //Va a actualizar el campo recepcion con la "fecha_recepcion" que se obtuvo del input
        //listo
        Tramite::where('egresado_id', $egresado->id)
                ->update(['recepcion' => $fecha_recepcion]);

        return redirect('/PaseLiberacion')->with('message', 'Cita de recepcion agregada!!');  
    }
    public function  actoRecepcion(Request $request, $id)
    {
        $egresado = User::find($id);
        $egresado->estado = 'Solicitud_Jurado';
        $egresado->save();

        $recepcion = request()->except(['_token']);
        $recepcion['egresado_id'] = Auth::id();

        $fecha_recepcionActo = $request->input('acto_recepcion');
        Tramite::where('egresado_id', $egresado->id)
                ->update(['acto_recepcion' => $fecha_recepcionActo]);
        
       
        return redirect('/actoRecepcional')->with('message', 'Acto recepcional agendado!');  
    }
    public function  asignacionActo(Request $request, $id)
    {
        $egresado = User::find($id);
        $egresado->estado = 'Acto_Agendado';
        $egresado->save();

        return redirect('/integracionJurado')->with('message', 'Acto recepcional agendado!');  
    }

    
    
    public function pase_liberacion($id)
    {
        $egresado = User::find($id);
        $tramites = Tramite::where('egresado_id',Auth::id())->get();

        return view('division.paseLiberacion',compact('tramites','egresado'));        
    }
    public function recepcion_acto($id)
    {
        $egresado = User::find($id);
        $tramite = Tramite::where('egresado_id', $id)
        ->first();
        return view('division.acto_recep', compact('tramite','egresado'));
    }
    public function jurado2($id)
    {
        $egresado = User::find($id);
        $tramite = Tramite::where('egresado_id', $id)
        ->first();
        $jurado = Jurado::where('egresado_id', $id)
       ->first();
            $presidente = User::find($jurado->presidente);
            $secretario = User::find($jurado->secretario);
            $vocal_propietario = User::find($jurado->vocalp);
            $vocal_suplente = User::find($jurado->vocals);
        
       
        return view('division.jurado_integracion', compact('egresado','tramite','presidente','secretario','vocal_propietario','vocal_suplente'));
    }


    public function consultas()
    {
        return view('division.aval', compact('users'));
    }
    public function asesores($id)
    {
        $egresado = User::find($id);
        $tramite = Tramite::where('egresado_id', $id)
        ->first();
        return view('division.solicitarAsesor', compact('egresado','tramite'));
    
    }
    //
    public function solicitudAsesor($id)
    {
       
        $egresado = User::find($id);
        $egresado->estado = 'Solicitud_De_Asesores';
        $egresado->save();

        return redirect("/divisionAval")->with('mensaje','Jurado asignado correctamente');
    
    }

    

    public function imprimir_aval_asesores($id)
    { 
        $egresado = User::find($id);

        $tramiteTabla = Tramite::where('egresado_id', $id)
        ->first();

        $pdf = \PDF::loadView('pdf.aval_asesores', compact('egresado', 'tramiteTabla'))->setOptions(['defaultFont' => 'sans-serif']);
       //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
    }

   public function imprimir_solicitud_integracion($id)
   { 
       $egresado = User::find($id);
       $tramite = Tramite::where('egresado_id', $id)
       ->first();

       $pdf = \PDF::loadView('pdf.solicitud_de_integracion_jurado',compact('egresado','tramite'))->setOptions(['defaultFont' => 'sans-serif']);
      //return view('pdf.aval_de_academia');
       return $pdf->stream('ejemplo.pdf');
  }
  public function imprimir_aviso_de_acto($id)
  { 
    $egresado = User::find($id);
    $jurado = Jurado::where('egresado_id', $id)
       ->first();
       $presidente = User::find($jurado->presidente);
       $secretario = User::find($jurado->secretario);
       $vocal_propietario = User::find($jurado->vocalp);
       $vocal_suplente = User::find($jurado->vocals);
       $tramite = Tramite::where('egresado_id', $id)
       ->first();

      $pdf = \PDF::loadView('pdf.aviso_acto',compact('egresado','presidente','secretario','vocal_propietario','vocal_suplente','tramite'))->setOptions(['defaultFont' => 'sans-serif']);
     //return view('pdf.aval_de_academia');
      return $pdf->stream('ejemplo.pdf');
 }
 public function imprimir_aviso_de_hora_actoRecep($id)
  { 
    $egresado = User::find($id);

    $jurado = Jurado::where('egresado_id', $id)
       ->first();
       $presidente = User::find($jurado->presidente);
       $secretario = User::find($jurado->secretario);
       $vocal_propietario = User::find($jurado->vocalp);
       $vocal_suplente = User::find($jurado->vocals);
       $tramite = Tramite::where('egresado_id', $id)
       ->first();
    
      $pdf = \PDF::loadView('pdf.aviso_hora_acto',compact('egresado','presidente','secretario','vocal_propietario','vocal_suplente','tramite'))->setOptions(['defaultFont' => 'sans-serif']);
     //return view('pdf.aval_de_academia');
      return $pdf->stream('ejemplo.pdf');
 }

 public function imprimir_liberacion_asesorias($id)
  {
    $egresado = User::find($id); 
    $asesores = Asesor::where('egresado_id', $id)
        ->first();
        $asesor = User::find($asesores->asesor_id);
        $revisor1 = User::find($asesores->revisor1_id);
        $revisor2 = User::find($asesores->revisor2_id);
        
      $pdf = \PDF::loadView('pdf.liberacion_asesoria',compact('egresado','asesor','revisor1','revisor2'))->setOptions(['defaultFont' => 'sans-serif']);
     //return view('pdf.aval_de_academia');
      return $pdf->stream('ejemplo.pdf');
 }

 public function requisito1Download($id)
 {
     $tramite = Tramite::where('id',$id)->first();
     $pathToFile = storage_path('app/public/tramites/' . $tramite->requisito1);
     return response()->download($pathToFile);
 }
 
 public function requisito2Download($id)
 {
     $tramite = Tramite::where('id',$id)->first();
     $pathToFile = storage_path('app/public/tramites/' . $tramite->requisito2);
     return response()->download($pathToFile);
 }
 
 public function requisito3Download($id)
 {
     $tramite = Tramite::where('id',$id)->first();
     $pathToFile = storage_path('app/public/tramites/' . $tramite->requisito3);
     return response()->download($pathToFile);
 }
 
 public function boucherDownload($id)
 {
     $tramite = Tramite::where('id',$id)->first();
     $pathToFile = storage_path('app/public/boucher/'. $tramite->boucher);
     return response()->download($pathToFile);
 }
  
 public function protocoloDownload($id)
 {
     $tramite = Tramite::where('id',$id)->first();
     $pathToFile = storage_path('app/public/protocolo/' . $tramite->protocolo);
     return response()->download($pathToFile);
 }
 


 public function imprimir_DGP()
 { 
    $pathToFile = storage_path('app/public/DGP/DGP.pdf');
    return response()->download($pathToFile);
 }
  
     
}
