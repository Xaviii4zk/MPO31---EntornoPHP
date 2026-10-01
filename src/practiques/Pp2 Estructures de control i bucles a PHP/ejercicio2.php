<?php

$multiplicador= 1;
$nInicio = 1;
$final = 11;
$resul = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Tablas de Multiplicar</title>
    <link rel="stylesheet" href="estilos2.css">
</head>
<body>
    <main>
        <div class="Tablas">
            <?php for ($nInicio = 1; $nInicio <= $final; $nInicio++): ?>
                <div class="casilla">
                    <?php for ($multiplicador = 1; $multiplicador < $final; $multiplicador++): ?>
                        <?php 
                        $resul = $nInicio * $multiplicador;
                        echo "<div class='Tabla'>$nInicio * $multiplicador = $resul</div>";
                        ?>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
        </div>
        <div class="tp2">
            <a class="tp" href="Ejercicio3.php">Ejercicio 3 Números aleatorios</a>
        </div>
    </main>
</body>
</html>