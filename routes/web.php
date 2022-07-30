<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('index', 'App\Http\Controllers\IndexController@index');
Route::get('dashboard', 'App\Http\Controllers\DashboardController@index');
Route::get('cadastro-marca', 'App\Http\Controllers\CadastroMarcaController@index');
Route::get('cadastro-marca-form', 'App\Http\Controllers\CadastroMarcaController@create');
Route::get('fabricacao-automovel', 'App\Http\Controllers\FabricacaoAutomovelController@index');
Route::get('automoveis-fabricados', 'App\Http\Controllers\AutomoveisFabricadosController@index');
