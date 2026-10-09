<?php

include "04-multidimensional.php";

var_dump($projecte);

if (isset($_GET["id"])) {
    [$_GET["id"]];
    foreach ($projectes as $elemento) {
        echo '<pre>';
        echo $elemento['Asignatura'];
        echo $elemento['Hores'];
        echo $elemento['Estat'];
        echo $elemento['Opinio'];
        echo '</pre>';
    }
}
?>


