<html>

<head>
  <title>@yield('titulo')</title>>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <header>
    <nav>
      <div class="nav-wrapper deep-orange">
        <a href="#!" class="brand-logo">Primeiro projeto de laravel</a>
        <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="/">home</a></li>
          <li><a href="{{route("admin.cursos")}}">Cursos</a></li>
        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="mobile">
      <li><a href="sass.html">Home</a></li>
      <li><a href="{{route("admin.cursos")}}">Cursos</a></li>
    </ul>
  </header>