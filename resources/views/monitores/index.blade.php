<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Walter Jesus Santiago Gonzalez">
	<title>Monitores</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap4/css/bootstrap.min.css') }}">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
	<header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Monitores I+D+I</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Crear monitor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Crear monitoria</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
      <div align="center">
      	<h1 class="mt-5">Listado de monitores</h1>
      </div>
      
    </main>



    <footer class="footer">
      <div class="container">
        <span class="text-muted">Copyright © 2018 <b>Monitores I+D+I</b> All rights reserved.</span>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    {{--<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>--}}
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>	
	<script type="text/javascript" src="{{ asset('bootstrap4/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('bootstrap4/js/popper.min.js') }}"></script>
</body>
</html>