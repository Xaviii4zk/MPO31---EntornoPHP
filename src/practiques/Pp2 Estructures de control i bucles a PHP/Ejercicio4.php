<?php 

$RandomN = rand(0, 100);

$cont=1;
$primocont=0;

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4 Divisors d'un nombre i verificació de nombre </title>
    <link rel="stylesheet" href="Ejercicio4.css">
</head>
<body>
    <main>
        <div class="contenedor">
            <?php 
            echo '<h1>Nombre generat: '. $RandomN .' </h1>';
            echo   '<h3>Divisors de '. $RandomN.': </h3>';
                
            echo '<div class="contenedor-divisores">';

            for ($cont = 1; $cont <= $RandomN; $cont++) {
                if ($RandomN % $cont == 0) {
                    echo '<div class="divisores">' . $cont . '</div>';
                    $primocont++;
                }
            }

            echo '</div>';
            
            if ($primocont > 2) {
            echo '<h2 class="par"> '.$RandomN .' NO es un número PRIMERO</h2>';
            } if ($primocont <= 2) {
            echo '<h2 class="impar"> '.$RandomN .' SI es un número PRIMERO</h2>';            
            }

            echo '<a href="Ejercicio5.php">Ejercicio 5</a>';

            ?>
        </div>
    </main>
</body>
</html>