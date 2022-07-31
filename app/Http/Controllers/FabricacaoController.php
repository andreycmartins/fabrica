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
        return view('fabricacao/form');
    }

    public function save( Request $request ){
        $fabricacao = new Fabricacao();
        $fabricacao = $fabricacao->create( $request->all() );
        return Redirect::to('/fabricacao/index');
    }
}
