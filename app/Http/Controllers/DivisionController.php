<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
 
class DivisionController extends Controller
{
    public function pase()
    {
        return view('division.liberacion');
    }
    public function aval()
    {
        return view('division.aval');
    }
    public function acto()
    {
        return view('division.actorecepcional');
    }
    public function formato()
    {
        return view('division.formato');
    }
    public function noincoveniencia()
    {
        return view('division.noincoveniencia');
    }
}
