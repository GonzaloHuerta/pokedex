<?php
include 'public/header.php';

if(!isset($_SESSION['user'])){
  echo "<div class='text-center'>Debe estar logueado como administrador para acceder a esta sección</div>";
  exit();
}
include("helpers/conexion.php");
$nombre = "";
$tipo = "";
$pokemons = getPokemons();
$tipos = getTipos();

foreach ( $pokemons as $pokemon){
  if ($pokemon['nro'] == $_GET["nro"]) {
    $nombre = $pokemon['nombre'];
    $tipo = $pokemon['tipo'];
  }
}
?>
<br>
<form enctype="multipart/form-data" action="modelo_modificacion.php" method="post">
  <label>Numero de Pokemon</label>
  <input name="numero" class="form-control" type="text" value='<?php echo $_GET["nro"]; ?>' readonly='readonly'>
  <br>
  <label>Nombre de Pokemon</label>
  <input name="nombre" class="form-control" type="text" value="<?php echo $nombre; ?>">
  <br>
  <label>Tipo de Pokemon </label>
  <select class="custom-select" name="tipo">
    <?php
      foreach ($tipos as $tipo) {
        if ($tipo['id'] == $_GET["nro"]) {
          echo "<option value='$tipo[id]' selected>" .$tipo['nombre'] . "</option>";
        }
        else{
          echo "<option value='$tipo[id]'>" .$tipo['nombre'] . "</option>";
        }
      }
     ?>
  </select>
  <label for="">Imagen</label>
  <input name="imagen" class="form-control" id="imagen" type="file">

  <br><br>
  <input id="enviar" class="btn btn-primary" name="enviar" type="submit" value="Modificar">
</form>
