<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function index()
    {
        return view('saludo');
    }
    public function login()
    {
        return view('login');
    }
    public function regis()
    {
        return view('registrar');
    }

}
