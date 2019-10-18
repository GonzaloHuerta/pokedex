<?php
include 'helpers/conexion.php';

if(isset($_POST['enviar'])){
  $destinoImagen = 'public/img/';
  $imagenSubida = $destinoImagen . basename($_FILES['imagen']['name']);

  if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
  	if (move_uploaded_file($_FILES['imagen']['tmp_name'], $imagenSubida)) {
      $nombre = $_POST['nombre'];
      $tipo = $_POST['tipo'];
      $nro = $_POST['numero'];

      $conn = getConexion();

      $query = "insert into pokemon(nro,nombre,tipo,imagen)values(\"$nro\",\"$nombre\",\"$tipo\",\"$imagenSubida\");";
      $resultado = mysqli_query($conn,$query)
      or die(mysqli_error($conn));
      header('Location: listadoDePokemones.php');
    }
  }
}

?>
