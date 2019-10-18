<?php
include("helpers/conexion.php");

$tipos = getTipos();
include 'public/header.php';
// session_start();

if(!isset($_SESSION['user'])){
  echo "<div class='text-center'>Debe estar logueado como administrador para acceder a esta sección</div>";
  exit();
}
 ?>
 <br>
  <div class="row">
    <div class="col"></div>
    <div class="col">
      <h1>Agregar Pokemon</h1>
      <br>
      <form enctype="multipart/form-data" action="modelo_alta.php" method="post">
        <label>Numero de Pokemon</label>
        <input name="numero" class="form-control" type="text" >
        <br>
        <label>Nombre de Pokemon</label>
        <input name="nombre" class="form-control" type="text"  required>
        <br>
        <label>Tipo de Pokemon </label>
        <select class="custom-select" name="tipo">
          <?php
            foreach ($tipos as $tipo) {
                echo "<option value='$tipo[id]'>" .$tipo['nombre'] . "</option>";
            }
          ?>
        </select>
        <br><br>
        <label for="">Imagen</label>
        <input name="imagen" class="form-control" id="imagen" type="file">
        <br><br>
        <input class="btn btn-primary" id="enviar" name="enviar" type="submit" value="Agregar Pokemon">
      </form>
    </div>
    <div class="col"></div>
  </div>

<?php include 'public/footer.php'; ?>
