<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function cadastrar(){
        $nome = 'Dayana Natasha';
        $variavel = 'valor';
        /*return view('cadastrar',[
        'nome' => 'Dayana Natasha',
        'variavel' => 'valor1'
        ]);*/
        /*return view('cadastrar', compact('nome', 'variavel'));*/
        return view('cliente.cadastrar')
        ->with('nome', $nome)
        ->with('variavel', $variavel);
    }

    public function excluir(){

    }

    public function editar(){

    }
}
