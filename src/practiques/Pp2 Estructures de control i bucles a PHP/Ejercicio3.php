<?php 

$RandomN = rand(0, 100);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números aleatorios</title>
    <link rel="stylesheet" href="Ejercicio3.css">
</head>
<body>
    <main>
        <?php
            if ($RandomN % 2 == 0) {
            echo "<div class='verde'>
                    <p>El numero que has tret es $RandomN </p>
                    <p>El numero que has tret es PARELL </p>
            </div>";
            } else {
            echo "<div class='rojo'>
                    <p>El numero que has tret es $RandomN </p>
                    <p>El numero que has tret es IMPARELL </p>
            </div>";            
            } 
        ?> 
        <a href="Ejercicio4.php">Ejercicio 4</a>
    <main>
</body>
</html>