<?php 

$numeroRandom = rand(0, 10);

if ($numeroRandom == 0) {
    echo '<p>El número es 0</p>';
} elseif ($numeroRandom % 2 == 0) {
    echo '<p>El número es par</p>';
} else {
    echo '<p>El número es impar</p>';
}

?>