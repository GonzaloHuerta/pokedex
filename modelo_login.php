<?php
include("helpers/conexion.php");

//Realiza conexion con la base de datos.
$conn = getConexion();

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['pass']);

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND pass = '$password'";
    $result = mysqli_query($conn, $sql)
              or die("Error al realizar la consulta de login.");

    //Mensajes de respuesta.
    if (mysqli_num_rows($result) > 0) {
        // header("Location:index.php");
        session_start();
        $_SESSION['user'] = $email;
        header('Location: index.php');
        exit();
    } else{
        echo "Usuario o contraseña inválidos";
    }
}
else {
  echo "error";
}
?>
