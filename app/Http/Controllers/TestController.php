<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
// Primeiro teste
//    public function  index(){
//
//        return "Ola mundo!";
//
//    }

    /*Recebendo a variavel das rotas*/
    public function  index($nome)
    {
        //passando a variavel para a view,
        return view('test/index',['nome'=>$nome]);

    }

    public function  notas()
    {
        return view('test/notas');

    }

}
