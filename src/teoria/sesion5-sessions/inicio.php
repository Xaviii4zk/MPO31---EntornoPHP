<?php

if(!isset($_SERVER['usuarioo'])) {
    //vete a tomar por culo
    header('Location: login.php');
    exit;
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">CERRAR SESIÓN</a>
</body>
</html>