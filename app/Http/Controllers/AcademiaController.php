<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class AcademiaController extends Controller
{
    public function liberacion()
    {
        return view('academia.liberacion');
    }
}
