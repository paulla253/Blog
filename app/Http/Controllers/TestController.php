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

        $notas = [
                    0=>'Anotações 1',
                    1=>'Anotações 2',
                    2=>'Anotações 3',
                    3=>'Anotações 4',
                    4=>'Anotações 5',
        ];

        return view('test/notas',compact('notas'));

    }

}
