<?php

require_once('conexion.php');

if(!empty($_POST['usuario'])&&(!empty($_POST['email']))&&(!empty($_POST['password'])&&(!empty($_POST['nombre'])))){

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nombre = $_POST['nombre'];

    $password = sha1($password);

    
    mysqli_query($conn,"INSERT INTO `usuario` (`id`, `nombre`, `usuario`, `email`, `password`, `fechaRegistro`) VALUES (NULL, '$nombre', '$usuario', '$email', '$password', CURRENT_TIMESTAMP)");

}else{

    echo "Algun campo esta vacio";
}