<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alumnoController extends Controller
{
    public function index(){
        return view('home');
    }

    public function pagina2(){
        return view('pagina2');

        //return view('pagina2', compact('datos'));
    }

    public function pagina1(){
        return view('pagina1');

        //return view('pagina2', compact('datos'));
    }


}
