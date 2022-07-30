<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FabricacaoAutomovelController extends Controller
{
    public function index(){
        return view('fabricacao-automovel');
    }
}
