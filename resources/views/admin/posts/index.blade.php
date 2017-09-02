@extends('template')

@section('content')

    <h1>Blog Admin </h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <th><Title</td>
            <th>Action</th>
        </tr>

        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td></td>

        </tr>
        @endforeach

    </table>

    {{--Colocando paginação--}}
    {{$posts->render()}}


@endsection