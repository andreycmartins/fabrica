<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MarcaController extends Controller
{
    public function index(){
        $marcas = Marca::get();

        return view('marca.index', ['marcas' => $marcas]);
    }

    public function create(){
        return view ('marca.form');
    }

    public function save(Request $request){
        $marcas = new Marca;
        $marcas = $marcas->create( $request->all() );
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
