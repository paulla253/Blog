@extends('template')

@section('content')

    <uL>
    @foreach($notas as $nota)

            <li>{{$nota}}</li>

     @endforeach
    </uL>
@stop

