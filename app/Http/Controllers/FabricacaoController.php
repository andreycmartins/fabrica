<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FabricacaoController extends Controller
{
    public function index(){
        return view('fabricacao/index');
    }

    public function create(){
        return view('fabricacao/create');
    }
}
