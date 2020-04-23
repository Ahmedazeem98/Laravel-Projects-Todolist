<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">TodoList</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
        <li class="{{Request::is('todo/create') ? 'active' : ''}}"><a href="/todo/create">Create Todo</a></li>
      </ul>
    </div>
  </nav>