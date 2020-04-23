@extends('layouts.app')

@section('content')
    <h1>My Todo List</h1>
    @if($todos)
        @foreach($todos as $todo)
        <div class="well">
            <div class="card-header">
                <h3>
                    <a href="/todo/{{$todo->id}}">{{$todo->title}}</a>
                </h3>
                <h3><span class= "label label-danger">{{$todo->due}}</span></h3>
             </div>
        </div>
        
        @endforeach
    @endif
   
@endsection