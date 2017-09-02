@extends('template')

@section('content')

    <h1>Create new Post </h1>

{!! Form::open(['method'=>'post']) !!}

<div class="form-group">

{{--{!! Form::label('title','Title:') !!}--}}
{{--{!! Form::text('title',null,['class'=>'form-control']) !!}--}}

</div>


{!! Form::close()!!}

@endsection