@extends('layouts.app')

@section('content')
    <br>
    <a class="btn btn-primary" href="/">Go back</a>
    <h1>{{$todo->title}}</h1>
    <p>{{$todo->body}}</p>
    <h3><span class= "label label-danger">{{$todo->due}}</span></h3>
    <br><br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-primary">Edit</a>
    <a href="/todo/{{$todo->id}}/delete" class="btn btn-danger">Delete</a>
@endsection