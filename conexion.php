<?php

$conn = new mysqli("localhost", "root", "", "examenEntornos");

    if ($conn == false) {
        echo "Fallo en la conexion";
    }