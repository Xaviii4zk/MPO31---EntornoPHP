    <?php
    $edad = 2026-2006;
    $nombre = "Xavier Baeza Lerma";
    $Ciudad = "Badalona";
    $Aficiones = "jugar al futbol y jugar videojuegos";
    $programar = "A pesar de que programar me cuesta y necesito darle un repaso";
    $OP = "me gustaria superar los problemas y entender a hacer todo pero siento que me será muy difíci";
    $presentacion = 'Me llamo ' .$nombre. ' tengo ' .$edad. ' años y vivo en ' .$Ciudad. 
    ' Una de mis aficiones es ' .$Aficiones. ', también estoy interesado en la 
    programación ' .$programar. ' y de este curso pienso que ' .$OP. ' pero igual me esforzaré.';
    function MiNombre() {
        return "Xavier Baeza Lerma";
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HTML + PHP</title>
        <link rel= "stylesheet" href="estilos.css">
    </head>
    <body>
        <main>
            <header>
                <img src="imagenes/logollefia.jpg" alt="Logo">
                <h1>MOP31. Pp01 1. Primers passos a PHP</h1>
            </header>
            <div class="columnas">
                <div class="columna-izq">

                    <?= $nombre ?>
                </div>
                <div class="columna-der">
                    <?= $presentacion ?>
                </div>
            </div>
            <div>
                <?php echo MiNombre(); ?>
            </div>
        </main>
    </body>
    <footer>
        <div class="nombrecompleto">

        </div>
        <div class="FechaActual">

        </div>
    </footer>
    </html>    
