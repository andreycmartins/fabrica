<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

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
    }

}
