<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class CadastroMarcaController extends Controller
{
    public function index(){
        $marcas = Marca::get();

        return view('cadastro-marca', ['marcas' => $marcas]);
    }

    public function create(){
        return view ('cadastro-marca-form');
    }
}
