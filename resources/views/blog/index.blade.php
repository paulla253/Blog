@extends('template-blog')


@section('conteudo')

    <div class="row">

        @foreach($conteudos as $conteudo )

         <div class="col-lg-4">
            <p>{{$conteudo}}</p>

             <p><a class="btn btn-primary" href="#" role="button">Ver detalhes &raquo;</a></p>
         </div>

        @endforeach

    </div>

@stop