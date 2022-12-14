<?php

namespace App\Http\Controllers;

use App\Models\Fabricacao;
use App\Models\Marca;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class MarcaController extends Controller
{
    public function index(){
        $marcas = Marca::get();

        return view('marca.index', ['marcas' => $marcas]);
    }

    public function create(Request $request){
        return view ('marca.form');
    }

    public function save(Request $request){
        $data = $request;
        $marcas = new Marca;
        $marcas->name = $data['name'];
        $marcas->nascimento = $data['nascimento'];
        $dataNova = $data['nacionalidade'];
        $marcas->nacionalidade = $dataNova;
        $marcas->save();
        return Redirect::to('/marca/index');
    }

    public function edit( $id ){
        $marcas = Marca::findOrFail( $id );
        return view ('marca.form', ['marcas' => $marcas]);
    }

    public function update($id, Request $request){
        $marcas = Marca::findOrFail( $id );
        $marcas->update( $request->all() );
        return Redirect::to('/marca/index');
    }

    public function delete( $id ){
        $marcas = Marca::findOrFail( $id );
        $marcas->delete();
        return Redirect::to('/marca/index')->with('mensagem', 'Produto cadastrado com sucesso!');
    }

}
