<?php

namespace App\Http\Controllers;

use App\CadastroCliente;
use Illuminate\Http\Request;

class cadastroController extends Controller
{
    public function cadastro(){
        
        return view('app.cadastro',['titulo'=>'Cadastro']);
    }

    public function salvar(Request $request){
        $contato = new CadastroCliente();
        $contato->create($request->all());
        
        return view('app.cadastro',['titulo'=>'Cadastro']); 
    }
}