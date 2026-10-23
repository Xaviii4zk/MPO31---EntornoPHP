<?php

session_start();

/* session_destroy();  PARA DESTRUIR LA SESION */

$_SESSION['edad'] = 19;

echo $_SESSION['edad'];

echo $_SESSION['name'];
?>

