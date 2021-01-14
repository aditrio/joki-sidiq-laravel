<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        return view('guru-dash');
    }

    public function modul()
    {

        return view('guru-modul');
    }
}
