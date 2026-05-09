<?php

mysqli_report(MYSQLI_REPORT_OFF);

function conectarDB() {
    $bd = mysqli_connect('localhost', 'root', '', 'restaurante_admin');

    if (!$bd) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    return $bd;
}