<?php


function generarTablaProductos($productos) {
    echo '<table class="tabla">
            <tr>
                <th>Nombre:</th>
                <th>Precio:</th>
                <th>Disponibilidad:</th>
            </tr>';

    foreach ($productos as $comida) {
        echo '<tr>
                <td>' . $comida["Nombre"] . '</td>
                <td>' . number_format((float) str_replace('$', '', $comida["Precio"]), 2) . ' €</td>';
        if ($comida["Disponibilidad"] == true) {
            echo '<td class="stock">En stock</td>';
        } else {
            echo '<td class="agotado">Agotado</td>';
        }
        echo '</tr>';
    }
        echo '</table>';
}


function muestraInfoContacto($Nombre, $Telefono, $Foto) {
        echo "Nombre: " . $Nombre . "<br>";
        echo "Número: " . $Telefono . "<br>";
        echo "Foto: <img src='" . $Foto . "'>";
}

function MostrarProductos($productos) {
    $i=0;
    echo '<table class="tabla2">
            <tr>
                <th>Productos disponibles:</th>
            </tr>';
    foreach ($productos as $producto) {
        echo '<tr>';
                if ($producto["Disponibilidad"] == true) {
                    echo '<td class="stock">' . $producto["Nombre"] . '</td>';
                } else {
                    echo '<td class="agotado">' . $producto["Nombre"] . '</td>';
                }
              echo'</tr>';
              $i++;
    }

    echo '</table>';
    
}

?>