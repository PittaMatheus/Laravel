<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Contato;
class ContatoController extends Controller
{
    public function index(){


        $contatos = [
            (object)["nome" => "Maria", "telefone" => "72575757]"],
            (object)["nome" => "Pedro", "telefone" => "47224252"],
        ];
        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);
        //dd($contato->lista());
    }

    public function criar(Request $req){
        dd($req->all());
    }

    public function editar(){
        return 'Metodo editar do contatoControler';
    }
}