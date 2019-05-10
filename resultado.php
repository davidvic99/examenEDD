<?php

require_once('conexion.php');


if(!isset($_POST['usuario'])&&(!isset($_POST['contra']))) {
} 
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];


$contra=sha1($contra);

$consulta=mysqli_query($conn,"SELECT * FROM `usuario` WHERE `usuario`='$usuario' and `password`='$contra'");
$almacenar = mysqli_num_rows($consulta);


if ($almacenar == 1) {
  $_SESSION['usuario'] = $usuario;
  header("Location: dashboard.php");

} else {
  echo "Algo ha fallado";
}




?>
