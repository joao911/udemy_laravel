<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{
    public function index(){
        $contatos=[
            ["nome"=>"joão", "telefone"=>"11970154082"],
            ["nome"=>"Pedro", "telefone"=>"11970154082"]
        ];
        return view('contato.index',compact('contatos'));
    }
    public function criar(Request $req){
        dd($req['nome']);
        return"esse é o metodo criar do controller";
    }
    public function editar(){
        return"esse é o medoto editar do controller";
    }
}
