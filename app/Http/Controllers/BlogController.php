<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        /*No futuro criar um model para organizar os conteudos*/

        $titulo = [
            0=>'Pokémon GO',
            1=>'Clash Royale',
            2=>'Minha Talking Angela',
        ];

        $conteudos = [
            0=>'Pokémon GO é um jogo eletrônico free-to-play de realidade aumentada voltado para smartphones.
               Foi desenvolvido por uma colaboração entre a Niantic, Inc.,
               a Nintendo e a The Pokémon Company para as plataformas iOS e Android',
            1=>'Clash Royale é um videojogo de estratégia freemium desenvolvido e publicado pela Supercell,
                sendo um videojogo da empresa sediada em Helsínquia, na Finlândia.',
            2=>'Explore o mundo da Talking Angela e personalize sua roupa, penteado,
                maquiagem e casa – tudo enquanto joga minigames viciantes e fofinhos.',
        ];

       return view('blog/index',compact('titulos','conteudos'));
    }
}
