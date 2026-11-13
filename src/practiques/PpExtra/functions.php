<?php
$contbasura = 0;

function ReciclarVidrio() {
    array_push($_SESSION['basura'], $residus[$aleatori]);
    array_push($_SESSION['residu_organics'], $residus[$aleatori]);
    unset($_SESSION['residus'][$aleatori]);
    array_values($_SESSION['residus']);
    $NVidrios = count($_SESSION['residu_organics']);
    echo $NVidrios;
    $contbasura++;
    array_shift($_SESSION['residus'][$aleatori]);
};


function MostrarTarjetas() {
    foreach($residus as $residu) {
        $aleatori =  array_rand($_SESSION['residus']);
        echo '<div class"Tarjeta">';
            echo '<img src= '. $_SESSION['residus']['img'] .'>';
        echo '</div>';
    }
}


function ReciclarPlastico() {
    array_push($_SESSION['basura'], $residus[$aleatori]);
    array_push($_SESSION['residu_plastic'], $residus[$aleatori]);
    unset($_SESSION['residus'][$aleatori]);
    array_values($_SESSION['residus']);
    $NPlastico = count($_SESSION['residu_plastic']);
    echo $NPlastico;
    $contbasura++;
    array_shift($_SESSION['residus'][$aleatori]);
}


function ReciclarPapelYCarton() {
    array_push($_SESSION['basura'], $residus[$aleatori]);
    array_push($_SESSION['residu_papelicartro'], $residus[$aleatori]);
    unset($_SESSION['residus'][$aleatori]);
    array_values($_SESSION['residus']);
    $NPapelycarton = count($_SESSION['residu_papelicartro']);
    echo $NPapelycarton;
    $contbasura++;
    array_shift($_SESSION['residus'][$aleatori]);
}

function ReciclarOrganico() {
    array_push($_SESSION['basura'], $residus[$aleatori]);
    array_push($_SESSION['residu_organics'], $residus[$aleatori]);
    unset($_SESSION['residus'][$aleatori]);
    array_values($_SESSION['residus']);
    $NOrganico = count($_SESSION['residu_organics']);
    echo $NOrganico;
    $contbasura++;
    array_shift($_SESSION['residus'][$aleatori]);
}

function ReciclarPeligro() {
    array_push($_SESSION['basura'], $residus[$aleatori]);
    array_push($_SESSION['residu_perillosos'], $residus[$aleatori]);
    unset($_SESSION['residus'][$aleatori]);
    array_values($_SESSION['residus']);
    $NPeligro = count($_SESSION['residu_perillosos']);
    echo $NPeligro;
    $contbasura++;
    array_shift($_SESSION['residus'][$aleatori]);
}

?>