<?php
include 'helpers/conexion.php';
$conn = getConexion();

if(isset($_POST['buscar'])){
    $nombrePokemon = $_POST['nombre'];

    // Consulta
    $sql = "SELECT p.nro,p.nombre,p.imagen,t.nombre as tipo
  						from pokemon p
  						inner join tipo t
  						on p.tipo = t.id
              WHERE p.nombre = '$nombrePokemon'";
    // $sql = "SELECT * FROM pokemon WHERE nombre = '$nombrePokemon'";

    $result = mysqli_query($conn, $sql)
              or die(mysqli_errno($conn));

    //Mensajes de respuesta.
    if (mysqli_num_rows($result) > 0) {

      while($row = mysqli_fetch_assoc($result)) {
          //En cada vuelta del while crea una variable que contiene cada viaje.
          $pokemon = Array();
          $pokemon['nro'] = $row["nro"];
          $pokemon['nombre'] = $row["nombre"];
          $pokemon['tipo'] = $row["tipo"];
          $pokemon['imagen'] = $row["imagen"];
          $pokemones[] = $pokemon;
      }
      include 'controlador/controlador_busqueda.php';

    }else{
      // echo "No hay resultados para la búsqueda";
      $pokemones = NULL;
      header('Location: resultadosBusqueda.php');
    }
  }


?>
