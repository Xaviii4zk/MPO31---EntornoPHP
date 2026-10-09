<?php
#no podemos mostrar un array con un echo tal cual, puedes recorrer sus valores con
#un foreach

$lista = ["Hola", "adios", "bum"];

echo 'hola ';

#manera 1 de printear un array o lista "print_r()"
echo '<pre>';
print_r($lista);
echo '</pre>';


#manera 2 de printear un array o lista
echo '<pre>';
var_dump($lista);
echo '</pre>';
