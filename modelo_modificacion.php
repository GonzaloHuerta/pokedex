<?php
include("helpers/conexion.php");

if(isset($_POST['enviar'])){
  $destinoImagen = 'public/img/';
  $imagenSubida = $destinoImagen . basename($_FILES['imagen']['name']);

  if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
  	if (move_uploaded_file($_FILES['imagen']['tmp_name'], $imagenSubida)) {
      $nombre = $_POST['nombre'];
      $tipo = $_POST['tipo'];
      $nro = $_POST['numero'];

      $conn = getConexion();

      $query = "update pokemon set nombre = \"$nombre\", tipo = \"$tipo\", imagen = \"$imagenSubida\" where nro = \"$nro\";";
      $resultado = mysqli_query($conn,$query);
          header('Location: listadoDePokemones.php');
    }
  }
}

?>
