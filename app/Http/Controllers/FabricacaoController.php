<?php

namespace App\Http\Controllers;

use App\Models\Fabricacao;
use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FabricacaoController extends Controller
{
    public function index(){
        return view('fabricacao/index');
    }

    public function create(){
        $marcas = Marca::get();

        return view('fabricacao/form', ['marcas' => $marcas]);
    }

    public function save( Request $request ){

        $number = rand(0,9);
        $letter = chr(rand(65,90));
        $chassi = $number;
        $chassi .= $letter;
        $letter = chr(rand(65,90));
        $chassi .= $letter;
        $chassi .= ' ';
        $letter = chr(rand(65,90));
        $chassi .= $letter;
        $letter = chr(rand(65,90));
        $chassi .= $letter;
        $number = rand(0,9);
        $chassi .= $number;
        $number = rand(0,9);
        $chassi .= $number;
        $letter = chr(rand(65,90));
        $chassi .= $letter;
        $chassi .= ' ';
        $letter = chr(rand(65,90));
        $chassi .= $letter;
        $chassi .= ' ';
        $number = rand(0,9);
        $chassi .= $number;
        $number = rand(0,9);
        $chassi .= $number;
        $number = rand(0,9);
        $chassi .= $number;
        $number = rand(0,9);
        $chassi .= $number;
        $number = rand(0,9);
        $chassi .= $number;
        $number = rand(0,9);
        $chassi .= $number;
        $number = rand(0,9);
        $chassi .= $number;
        $number = rand(0,9);
        $chassi .= $number;

        $data = $request;
        $fabricacao = new Fabricacao();
        $fabricacao->name = $data['name'];
        $fabricacao->portas = $data['portas'];
        $fabricacao->litragem = $data['litragem'];
        $fabricacao->tipo_veiculo = $data['tipo_veiculo'];
        $fabricacao->tipo_motor = $data['tipo_motor'];
        $fabricacao->tipo_rodas = $data['tipo_rodas'];
        $fabricacao->cor = $data['cor'];
        $fabricacao->chassi = $chassi;
        $fabricacao->save();

        return view('/fabricacao/after-create', ['fabricacao' => $fabricacao]);
    }
}
