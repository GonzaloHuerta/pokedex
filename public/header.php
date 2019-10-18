<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8" />
  <title>Pokedex</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/index.php">Pokedex</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/listadoDePokemones.php">Listado de Pokemones</a>
      </li>
      <?php
        session_start();
        if(isset($_SESSION['user'])){
          echo "<li class='nav-item'>
                  <a class='nav-link' href='agregarPokemon.php'>Agregar Pokemon</a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='eliminarPokemon.php'>Eliminar Pokemon</a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='modificarPokemon.php'>Modificar Pokemon</a>
                </li>";
        }
         ?>
      <li class="nav-item">
        <?php
        if(isset($_SESSION['user'])){
          echo "<a class='nav-link' href='/logout.php'>Cerrar sesión</a>";
        }
        else {
          echo "<a class='nav-link' href='/login.php'>Iniciar sesión</a>";
        }
        ?>
      </li>
    </ul>
  </div>
</nav>
  <div class="container">
