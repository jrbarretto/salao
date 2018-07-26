<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title> @yield('page-title') </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    
    <!-- Custom styles for this template -->
  </head>

  <body>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Sys4Beauty</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastros</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{ route('usuarios.index') }} ">Usuários</a>
              <a class="dropdown-item" href="{{ route('companies.index') }} ">Companies</a>
              <a class="dropdown-item" href="#">Establishments</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Agenda</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Caixa</a>
              <div class="dropdown-menu" aria-labelledby="dropdown02">
                <a class="dropdown-item" href="{{ route('usuarios.index') }} ">Gaveta do Caixa</a>
                <a class="dropdown-item" href="{{ route('companies.index') }} ">Saldo do Caixa</a>
                <a class="dropdown-item" href="#">Fechamento do Caixa</a>
              </div>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Administrador</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <p><BR><BR><BR></p>  

        @include('layouts/flash-message')
        
        @yield('content')

      </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script>
      $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
      </script>
  </body>
</html>
