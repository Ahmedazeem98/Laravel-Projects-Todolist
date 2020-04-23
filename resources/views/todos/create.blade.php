@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>
    {!! Form::open(['action' => 'todosController@store', 'method' => 'POST']) !!}

        {{Form::label('title', 'Todo Title')}}
        {{Form::text('title',old('title'),['class'=>'form-control','placeholder' => 'Enter Todo Title'])}}
        <br>
        {{Form::label('Body', 'Todo Body')}}
        {{Form::textarea('body',old('body'),['class'=>'form-control','placeholder' => 'Enter Todo Body'])}}
        <br>
        {{Form::label('due', 'Due')}}
        {{Form::text('due',old('due'),['class'=>'form-control','placeholder' => 'e.g Sunday'])}}
        <br>
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
       

    {!! Form::close() !!}
@endsection