<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function imprimir_aval_de_academia(){ 
        $pdf = \PDF::loadView('pdf.aval_de_academia')->setOptions(['defaultFont' => 'sans-serif']);
       //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
   }
   public function imprimir_aceptacion_tesis(){ 
        $pdf = \PDF::loadView('pdf.aceptacion_tesis')->setOptions(['defaultFont' => 'sans-serif']);
    //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
    }
    public function imprimir_constancia_no_inconveniencia(){ 
        $pdf = \PDF::loadView('pdf.constancia_no_inconveniencia')->setOptions(['defaultFont' => 'sans-serif']);
    //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
    }
    public function imprimir_liberacion_academica(){ 
        $pdf = \PDF::loadView('pdf.liberacion_academica')->setOptions(['defaultFont' => 'sans-serif']);
        //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
    }
    public function imprimir_respuesta_de_integracion_jurado(){ 
        $pdf = \PDF::loadView('pdf.respuesta_de_integracion_jurado')->setOptions(['defaultFont' => 'sans-serif']);
        //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
    }
    public function imprimir_solicitud_de_integracion_jurado(){ 
        $pdf = \PDF::loadView('pdf.solicitud_de_integracion_jurado')->setOptions(['defaultFont' => 'sans-serif']);
        //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
    }
    public function imprimir_solicitud_recepcion(){ 
        $pdf = \PDF::loadView('pdf.solicitud_recepcion')->setOptions(['defaultFont' => 'sans-serif']);
        //return view('pdf.aval_de_academia');
        return $pdf->stream('ejemplo.pdf');
    }

}
