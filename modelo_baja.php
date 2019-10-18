<?php
session_start();

if(!isset($_SESSION['user'])){
  echo "<div class='text-center'>Debe estar logueado como administrador para acceder a esta sección</div>";
  exit();
}
  include 'helpers/conexion.php';
    $nro = $_GET['nro'];

    $conn = getConexion();

    $query = "delete from pokemon where nro = \"$nro\";";
    $resultado = mysqli_query($conn,$query);
    echo "Se eliminó correctamente el Pokemon";
        // header("Location:index.php");
        exit();
?>
