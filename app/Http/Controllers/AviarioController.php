<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AviarioController extends Controller
{
    public function index(){
        return view('dados');
    }
}
