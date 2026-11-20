<?php
session_start();

 if ($_SERVER["REQUEST_METHOD"] === "POST" &&  isset( $_POST["accio"] ) && $_POST["accio"] === "reiniciar") {

     if (! isset( $_SESSION["usuari_actiu"] ) ||  $_SESSION["usuari_actiu"]["rol"] !== "admin") {
        header( "Location: login.php" );
        exit;
    }

    $_SESSION = [];
   session_destroy();

} else {


    unset( $_SESSION["usuaris"] );
    unset( $_SESSION["partida"] );

}

header( "Location: index.php" );
exit;