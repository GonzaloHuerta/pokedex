<?php include 'public/header.php';?>
<br>
  <h1>Listado de Pokemones</h1>
  <br>
    <?php
      include 'helpers/conexion.php';
      $pokemons = getPokemons();
    ?>
    <table class="table table-hover table-striped">
      <thead>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Tipo</th>
      </thead>
    <?php  foreach ($pokemons as $pokemon){
      $img = $pokemon['imagen'];
        echo   "<tr>
              <td><img src='$img' width='100px' height='100px'></td>
              <td>" . $pokemon['nombre'] . "</td>
              <td>" . $pokemon['tipo'] . "</td>
            </tr>";
    }?>
    </table>

<?php include 'public/footer.php';  ?>
