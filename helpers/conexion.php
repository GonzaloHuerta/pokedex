<?php
include 'config.php';

function getConexion(){

    $config = getConfigAsArray();

    $servername = $config['database']['hostname'];
    $username = $config['database']['username'];
    $dbname = $config['database']['database'];
    $password = $config['database']['password'];

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

function getPokemons(){

	$conexion = getConexion();
	$query = "select p.nro,p.nombre,p.imagen,t.nombre as tipo
						from pokemon p
						inner join tipo t
						on p.tipo = t.id; ";
	$resultado = mysqli_query($conexion,$query);
  $pokemons = Array();
    if (mysqli_num_rows($resultado) > 0) {

        while($row = mysqli_fetch_assoc($resultado)) {
            $pokemon['nro'] =  $row["nro"];
            $pokemon['nombre'] =  $row["nombre"];
            $pokemon['tipo'] =  $row["tipo"];
            $pokemon['imagen'] =  $row["imagen"];
            $pokemons[] = $pokemon;
        }
    }
    return $pokemons;
}

function getTipos(){
	$conexion = getConexion();
	$query = "select * from tipo; ";
	$resultado = mysqli_query($conexion,$query);
  if(!$resultado){
    echo mysqli_error($conexion);
  }
	$tipos = Array();

	if (mysqli_num_rows($resultado) > 0) {

			while($row = mysqli_fetch_assoc($resultado)) {

					$tipo['id'] =  $row["id"];
					$tipo['nombre'] =  $row["nombre"];
					$tipos[] = $tipo;
			}
	}
	return $tipos;
}

?>
