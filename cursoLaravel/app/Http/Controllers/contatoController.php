<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class contatoController extends Controller
{
    public function index(){
        $contatos=[
            ["nome"=>"joão", "telefone"=>"11970154082"],
            ["nome"=>"Pedro", "telefone"=>"11970154082"]
        ];
        $contato = new Contato();
        return view('index',compact('contatos'));
        //compact vai possibilitar o acesso de contatos em index
    }
    public function criar(Request $req){
        return"esse é o metodo criar do controller";
    }
    public function editar(){
        return"esse é o medoto editar do controller";
    }
}
