{{--Pegando esse template--}}
@extends('template')

    {{--Pegando essa seção do template--}}
    @section('content')
        Olá

    {{--Parando a seção    --}}
    @stop

    @section('content')
        Olá mundo! {{$nome}}
    @stop

