@extends('layouts.app')

@section('content')
    <h1>Edit Todo</h1>
    {!! Form::open(['action' => ['todosController@update',$todo->id], 'method' => 'PUT']) !!}

        {{Form::label('title', 'Todo Title')}}
        {{Form::text('title',$todo->title,['class'=>'form-control'])}}
        <br>
        {{Form::label('Body', 'Todo Body')}}
        {{Form::textarea('body',$todo->body,['class'=>'form-control'])}}
        <br>
        {{Form::label('due', 'Due')}}
        {{Form::text('due',$todo->due,['class'=>'form-control'])}}
        <br>
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection