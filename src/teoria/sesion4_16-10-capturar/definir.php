<?php

if (isset($_POST["nombre"]) && isset($_POST["numero"])) {
    $nombre = $_POST["nombre"];
    $numero = $_POST["numero"];

    echo "Nombre: " . $nombre . "<br>";
    echo "Número: " . $numero;
}

?>
