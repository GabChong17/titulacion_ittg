<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Egresado;
use App\Models\User;
use App\Models\Tramite;
use App\Models\Jurado;
use Illuminate\Support\Carbon;
 

class ServiciosEscolaresController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('escolares',['only'=> ['index']]);
    // }
    public function citaAgenda()
    {
        $cita = request()->except(['_token']);
        //no funciona hasta que se ingrese como un empleado
        $cita['empleado_id'] = Auth::id();
        Tramite::insert($cita);

        return redirect('/NoIncoveniencia')->with('message', 'Cita guardada');  

        
    }
    public function documento($id)
    {
        $egresado = User::find($id);

        $tramite = Tramite::where('egresado_id', $id)
        ->first();
        return view('servicios.documento', compact('egresado', 'tramite'));
    }

    public function noincoveniencia()
    {
        
        $egresado = User::where('rol', 'egresado')->get();        
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_revision_escolares = DB::select("SELECT estado from users where estado = 'Revision_Escolares'");
        
        $users_revision_escolares = User::where('estado', '=', 'Revision_Escolares')->get();


        return view('servicios.noincoveniencia',compact('egresado','users_revision_escolares'));
      
    }

    public function liberarNoincoveniencia()
    {
        $egresado = User::where('rol', 'egresado')->get();        
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_revision_escolares = DB::select("SELECT estado from users where estado = 'Revision_Escolares'");
        
        $users_documentos_revisados = User::where('estado', '=', 'Documentos_Revisados')->get();


        return view('servicios.liberarInconveniencia',compact('egresado','users_documentos_revisados'));
      
    }

    public function escolaresProtocolo()
    {
        $egresado = User::where('rol', 'egresado')->get();
        
        //$users_cita_agendada = DB::select("SELECT estado from users where estado = 'Cita_Agendada'");
        //$users_tramite_iniciado = DB::select("SELECT estado from users where estado = 'Tramite_iniciado'");
        //$users_revision_escolares = DB::select("SELECT estado from users where estado = 'Revision_Escolares'");
        
        $users_acto_agendado = User::where('estado', '=', 'Acto_Agendado')->get();
        $users_tramite_finalizado = User::where('estado', '=', 'Tramite_Finalizado')->get();


        return view('servicios.protocolo',compact('egresado','users_acto_agendado','users_tramite_finalizado'));
      
    }

    public function liberar($id)
    {
       $egresado = User::find($id);
       $tramite = Tramite::where('egresado_id', $id)
       ->first();

        return view('servicios.liberar', compact('egresado','tramite'));
        
    }
    
    public function concluir($id)
    {
        $egresado = User::find($id);
        $tramite = Tramite::where('egresado_id', $id)
        ->first();

        return view('servicios.concluir',compact('egresado','tramite'));
    }

    public function  finalizar($id)
    {
        
        $egresado = User::find($id);
        $egresado->estado = 'Tramite_Finalizado';
        $egresado->save();

        return redirect("/escolaresProtocolo")->with('mensaje','Jurado asignado correctamente');
    }
    public function  documentosRevisados($id)
    {
        
        $egresado = User::find($id);
        $egresado->estado = 'Documentos_Revisados';
        $egresado->save();

        return redirect("/NoIncoveniencia")->with('mensaje','Jurado asignado correctamente');
    }
    public function  liberarNo($id)
    {
        
        $egresado = User::find($id);
        $egresado->estado = 'No_Incoveniencia';
        $egresado->save();

        return redirect("/LiberarNoIncoveniencia")->with('mensaje','Jurado asignado correctamente');
    }
    
    
    public function imprimir_solicitud_acto($id)
    {
        $egresado = User::find($id); 
        $pdf = \PDF::loadView('pdf.solicitud_recepcion',compact('egresado'))->setOptions(['defaultFont' => 'sans-serif']);
       //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
   }

   public function imprimir_no_adeudo($id)
    {
        $egresado = User::find($id); 
        $pdf = \PDF::loadView('pdf.constancia_no_inconveniencia',compact('egresado'))->setOptions(['defaultFont' => 'sans-serif']);
       //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
   }
   public function imprimir_protocolo($id)
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

            $now  = Carbon::now();
            $fechaActual = $now = Carbon::now()->format('d-m-Y');

        $pdf = \PDF::loadView('pdf.protocolo',compact('egresado','tramite','presidente','secretario','vocal_propietario','vocal_suplente', 'fechaActual'))->setOptions(['defaultFont' => 'sans-serif']);
       //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
   }
   public function imprimir_juramento($id)
    {
        $egresado = User::find($id); 
        $pdf = \PDF::loadView('pdf.juramento',compact('egresado'))->setOptions(['defaultFont' => 'sans-serif']);
       //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
   }
   public function imprimir_certificado($id)
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

            $now  = Carbon::now();
            $fechaActual = $now = Carbon::now(new \DateTimeZone('America/Mexico_city'))->format('d-m-Y');
            $horaActual = $now = Carbon::now(new \DateTimeZone('America/Mexico_city'))->format('H:i');

        $pdf = \PDF::loadView('pdf.certificado',compact('egresado','tramite','presidente','secretario','vocal_propietario','vocal_suplente','fechaActual','horaActual'))->setOptions(['defaultFont' => 'sans-serif']);
       //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
   }    
}
