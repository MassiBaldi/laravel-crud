<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel Migration</title>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Laravel Crud</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item{{ (Request::route()->getName() == 'users.index') ? 'active' : null }}">
              <a class="nav-link" href="{{ route('users.index')}}">Utenti</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    @yield('content')
  </body>
</html>
