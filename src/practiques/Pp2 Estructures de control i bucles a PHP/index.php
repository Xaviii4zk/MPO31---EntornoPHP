<?php 

$limite = 500;
$inicio;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 2, Ejercicio 1 PHP</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="introduccion">
        <h1>Los numeros pares de 50 y 500</h1>
    </div>
    <div class="Numeros1">
        <?php for ($inicio = 50; $inicio < $limite; $inicio = $inicio + 5): ?>

            <?php if ($limite % $inicio == 0): ?>
                <div class="Numeros2"><?php echo $inicio; ?></div>
            <?php endif; ?>

        <?php endfor; ?>
    </div>
    <div class="tp">
        <a href="ejercicio2.php">Ejercicio 2 Tablas de Multiplicar</a>
    </div>
</body>
</html>