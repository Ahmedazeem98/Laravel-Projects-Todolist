@if($errors)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if($message = session('message'))
    <div class="alert alert-success">{{$message}}</div>
@endif