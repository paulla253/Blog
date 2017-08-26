@extends('template-blog')


@section('conteudo')


    {{--@foreach($notas as $nota)--}}

    {{--<li>{{$nota}}</li>--}}

    {{--@endforeach--}}

    <div class="row">

        <div class="col-lg-4">
            <h2>Pokémon GO</h2>
            <p>Pokémon GO é um jogo eletrônico free-to-play de realidade aumentada voltado para smartphones.
               Foi desenvolvido por uma colaboração entre a Niantic, Inc.,
               a Nintendo e a The Pokémon Company para as plataformas iOS e Android</p>
            <p><a class="btn btn-primary" href="#" role="button">Ver detalhes &raquo;</a></p>
        </div>

        <div class="col-lg-4">
            <h2>Clash Royale</h2>
            <p>Clash Royale é um videojogo de estratégia freemium desenvolvido e publicado pela Supercell,
                sendo um videojogo da empresa sediada em Helsínquia, na Finlândia.</p>
            <p><a class="btn btn-primary" href="#" role="button">Ver detalhes &raquo;</a></p>
        </div>

        <div class="col-lg-4">
            <h2>Minha Talking Angela</h2>
            <p>Explore o mundo da Talking Angela e personalize sua roupa, penteado,
                maquiagem e casa – tudo enquanto joga minigames viciantes e fofinhos.</p>
            <p><a class="btn btn-primary" href="#" role="button">Ver detalhes &raquo;</a></p>
        </div>

    </div>

@stop