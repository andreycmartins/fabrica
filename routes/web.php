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
//rotas de index
Route::get('index', 'App\Http\Controllers\IndexController@index');

//rodas de dashboard
Route::get('dashboard/index', 'App\Http\Controllers\DashboardController@index');

//rotas de marca
Route::get('marca/index', 'App\Http\Controllers\MarcaController@index');
Route::get('marca/create', 'App\Http\Controllers\MarcaController@create');
Route::post('marca/save', 'App\Http\Controllers\MarcaController@save');
Route::get('marca/{id}/edit', 'App\Http\Controllers\MarcaController@edit');
Route::post('marca/update/{id}', 'App\Http\Controllers\MarcaController@update');
Route::delete('marca/delete/{id}', 'App\Http\Controllers\MarcaController@delete');

//rotas de fabricacao
Route::get('fabricacao/index', 'App\Http\Controllers\FabricacaoController@index');
Route::get('fabricacao/create', 'App\Http\Controllers\FabricacaoController@create');
