<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modul;
use Illuminate\Support\Facades\Auth;


class PageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = Modul::all();

        if (Auth::user()->role == "guru") {
            return view('guru-dash',['data' => $data]);   
        }

        return view('siswa-dash',['data' => $data]);   

        
    }

    public function modul()
    {

        $data = Modul::all();

        return view('guru-modul', ['data' => $data]);
    }
}
