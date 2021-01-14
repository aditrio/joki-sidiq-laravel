<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modul;

class PageController extends Controller
{
    public function index()
    {

        return view('guru-dash');
    }

    public function modul()
    {

        $data = Modul::all();

        return view('guru-modul', ['data' => $data]);
    }
}
