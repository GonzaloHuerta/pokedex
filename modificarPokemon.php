<?php include 'public/header.php';

if(!isset($_SESSION['user'])){
  echo "<div class='text-center'>Debe estar logueado como administrador para acceder a esta sección</div>";
  exit();
}
?>

<br>
  <h1>Modificación</h1>
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
              <td><a href=' modificacion.php?nro=" . $pokemon['nro'] . " '>Modificar</a> </td>
            </tr>";
    }?>
    </table>

<?php include 'public/footer.php';  ?>
