<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
     
    
    <title>Todo list</title>
</head>
<body>
    @include('includes.nav')    
    <div class="container">
        @include('includes.errors')
        @yield('content')
        <footer id = "footer" class="text-center">
            <p>Copyright &copy; 2020</p>
        </footer>
    </div>
</body>
</html>