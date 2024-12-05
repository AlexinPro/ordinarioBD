<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ordinario @yield('tittle')</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="gradient-bg">
  <nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="">ORDINARIO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/empleados">Empleados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/departamentos">Departamentos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/puestos">Puestos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-3">
    @yield('body')
  </div>

</body>

</html>