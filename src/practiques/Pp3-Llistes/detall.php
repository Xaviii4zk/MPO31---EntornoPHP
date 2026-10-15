
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacio de la pelicula</title>
    <link rel="stylesheet" href="detall.css">
</head>
<body>
<?php

include "pelicules.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    echo '<main>';
        echo '<header>';
            echo '<h1>' . $peliculas[$id]["nom"] . '</h1>';
        echo '</header>';

        echo '<div class="linea"></div>';

        echo '<div class="Separar">';
            echo '<div class="izquierda">';
                echo '<img src="' . $peliculas[$id]["fotopelicula"] . '" alt="Película">';
            echo '</div>';

            echo '<div class="derecha">';

                echo '<div class="contenido">';
                    echo '<p>' . $peliculas[$id]["descripcio"] . '</p>';
                echo '</div>';

                echo '<div class="contenido">';
                    echo '<span>Duracion: </span>';
                    echo '<p>' . $peliculas[$id]["Duracio"] . '</p>';
                echo '</div>';

                    if (isset($peliculas[$id]["Director"])) {
                        echo '<div class="contenido">';
                            echo '<span>Director: </span>';
                            echo '<p>' . $peliculas[$id]["Director"] . '</p>';
                        echo '</div>';
                    }

                    if (isset($peliculas[$id]["Actores"])) {
                        echo '<div class="contenido">';
                            echo '<span>Actores: </span>';
                            echo '<p>' . $peliculas[$id]["Actores"] . '</p>';
                        echo '</div>';
                    }
                echo '<div class="contenido">';
                    echo '<span>Clasificacio: </span>';
                    echo '<p>' . $peliculas[$id]["Clasificacio"] . '</p>';
                echo '</div>';

                echo '<div class="contenido">';
                    echo '<span>Genero: </span>';
                    echo '<p>' . $peliculas[$id]["Genere"] . '</p>';
                echo '</div>';

                echo '<div class="contenido">';
                    echo '<select class="Fechas">';
                        foreach ($peliculas[$id]["Opciones"] as $opcion) {
                            echo '<option>' . $opcion . '</option>';
                        }
                    echo '</select>';
                echo '</div>';

                echo '<div class="Horas_disponibles">';
                    echo '<p>DISPONIBILIDAD</p>';
                    foreach ($horarios as $hd) {
                        echo '<span>' . $hd . '</span>';
                    }
                echo '</div>';

            echo '</div>';
        echo '</div>';

        echo '<div class="direccionar">';
            echo '<a href="trailer.php?id=' . $id . '">';
                echo '<button>TRAILER</button>';
            echo '</a>';

            echo '<a href="index.php">';
                echo '<button>VOLVER AL MENU</button>';
            echo '</a>';
        echo '</div>';

    echo '</main>';
}

?>
</body>
</html>