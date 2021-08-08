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
}
