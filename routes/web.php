<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('cliente/cadastrar', function(){
    $nome = 'Luiz Carlos';
    $variavel = 'valor';
    /*return view('cadastrar',[
        'nome' => 'Luiz Carlos',
        'variavel' => 'valor1'
    ]);*/
    /*return view('cadastrar', compact('nome', 'variavel'));*/
    return view('cliente.cadastrar')
        ->with('nome', $nome)
        ->with('variavel', $variavel);


});
