<?php
session_start();
include 'dades.php';
$residus = $_SESSION['residus'];
if ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_POST['nombre']))) {
   $_SESSION['nombre'] = $_POST['nombre'];
};

if (!isset($_SESSION['nombre'])) {
    // De vuelta al index
    header("Location: index.php");
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
    <?php 
    include 'header.php';
    ?>

    <?php



    ?>

</body>
</html>