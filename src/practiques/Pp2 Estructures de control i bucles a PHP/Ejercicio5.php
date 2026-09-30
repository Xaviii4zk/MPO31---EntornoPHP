<?php

$i = 0;
$RandomN = rand(-10, 40);
$ArrayTemperaturas = [];
$media=0;

for ($i=0; $i < 10; $i++) {
    $RandomN = rand(-10, 40);
    $ArrayTemperaturas[$i]=$RandomN;
    $media = $media + $ArrayTemperaturas[$i];
    
}
    $media = ($media/$ArrayTemperaturas.length)*100

    $i=0;
    

if ( $ArrayTemperaturas[$i] <10) {
    echo '<div class="tarjetas frio">'
    echo '<h2>'.$ArrayTemperaturas[$i] .'</h2>';
    echo '<p>Fred</p>';
    echo '</div>';
}

if ( $ArrayTemperaturas[$i] > 10 && 25 > $ArrayTemperaturas[$i]) {
    echo '<div class="tarjetas suau">'
    echo '<h2>'.$ArrayTemperaturas[$i] .'</h2>';
    echo '<p>eTmperatura suau</p>';
    echo '</div>';
}

if ( $ArrayTemperaturas[$i] > 25) {
    echo '<div class="tarjetas calor">'
    echo '<h2>'.$ArrayTemperaturas[$i] .'</h2>';
    echo '<p>Calor</p>';
    echo '</div>';

    echo '<h3>Mitjana de les temperatures: '. $media .'ºC</h3>';
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejejercicio 5 L’home del temps</title>
    <link rel="stylesheet" href="Ejercicio5.css">
</head>
<body>
    <main>
        
    <main>
</body>
</html>