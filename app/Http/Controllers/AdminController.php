<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }

    public function division()
    {
        return view('admin.division');
    }

    public function jefatura()
    {
        return view('admin.jefatura');
    }

    public function academia()
    {
        return view('admin.academia');
    }

    public function escolares()
    {
        return view('admin.escolares');
    }
}
