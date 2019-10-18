<?php   include 'public/header.php'; ?>
<br>
<table class="table table-hover table-striped">
  <?php
    // $tipos = getTipos();
    if (isset($pokemones)){

    echo "  <h1>Resultados de la búsqueda: </h1>
            <br><br>
            <thead>
              <th>Imagen</th>
              <th>Nombre</th>
              <th>Tipo</th>
            </thead>
    ";
    foreach ($pokemones as $pokemon){
      $img = $pokemon['imagen'];
      echo   "<tr>
                  <td><img src='$img' width='100px' height='100px'></td>
                  <td>" . $pokemon['nombre'] . "</td>
                  <td>" . $pokemon['tipo'] . "</td>
              </tr>";
    }
  } else {
        echo "<div class='text-center'>
                <p>No se han encontrado Pokemones</p>
                <br><br>
                <a href='index.php'>Volver a la búsqueda</a>
              </div>";

    }
  ?>


</table>
<br><br>
<!-- <a href="formIngresar.php">Insertar Pokemon</a>
<br>
<a href="modificarPokemon.php">Modificar Pokemon</a>
<br>
<a href="eliminarPokemon.php">Eliminar Pokemon</a -->

<?php include 'public/footer.php'; ?>
