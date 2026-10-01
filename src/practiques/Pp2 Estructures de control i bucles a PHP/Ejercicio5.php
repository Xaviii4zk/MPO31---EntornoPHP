<?php
$media = 0;
$ArrayTemperaturas = [];

for ($i = 0; $i < 10; $i++) {
    $RandomN = rand(10, 40);
    $ArrayTemperaturas[$i] = $RandomN;
    $media += $RandomN; 
}

$media = $media / count($ArrayTemperaturas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 5 - L'home del temps</title>
    <link rel="stylesheet" href="Ejercicio5.css">
</head>
<body>
    <main>
        <?php
        echo '<h3 class="Clasificar">Clasificació de temperatures</h3>';
        for ($i = 0; $i < count($ArrayTemperaturas); $i++) {
            if ($ArrayTemperaturas[$i] <= 15) {
                echo '<div class="tarjetas frio"><h2>' . $ArrayTemperaturas[$i] . 'ºC</h2><p>Fred</p></div>';
            }
            if ($ArrayTemperaturas[$i] > 15 && $ArrayTemperaturas[$i] <= 25) {
                echo '<div class="tarjetas suau"><h2>' . $ArrayTemperaturas[$i] . 'ºC</h2><p>Temperatura suau</p></div>';
            }
            if ($ArrayTemperaturas[$i] > 25) {
                echo '<div class="tarjetas calor"><h2>' . $ArrayTemperaturas[$i] . 'ºC</h2><p>Calor</p></div>';
            }
        }
        echo '<h3>Mitjana de les temperatures: ' . round($media, 2) . 'ºC</h3>';
        ?>
    </main>
</body>
</html>