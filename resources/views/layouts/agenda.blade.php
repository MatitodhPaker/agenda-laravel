<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ms+Madi&family=Press+Start+2P&display=swap" rel="stylesheet"> 
  <script src="https://kit.fontawesome.com/acab1451a4.js" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.min.js"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">
  <title>@yield('titulo_pagina')</title>
</head>
<body>
  <div class="container-xxl">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('inicio')}}">
          <span class="fa-solid fa-users-between-lines fa-2xl"></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('inicio')}}">
                <i class="fa-solid fa-house-chimney"></i> Inicio
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('categorias.index')}}">
                <i class="fa-solid fa-list-ul"></i> Categorias
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contactos.index')}}">
                <i class="fa-solid fa-address-card"></i> Contactos
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('contenido')
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  @yield('dataTable')
</body>
</html>