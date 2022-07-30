<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutomoveisFabricadosController extends Controller
{
    public function index(){
        return view('automoveis-fabricados');
    }
}
