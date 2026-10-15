<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trailer</title>
    <link rel="stylesheet" href="trailer.css">
</head>
<body>
<?php
include "pelicules.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
?>

    <main>
        <h1><?php echo $peliculas[$id]["nom"]; ?></h1>

        <div class="pantalla">
            <iframe 
                src="<?= $peliculas[$id]["Trailer"] ?>?autoplay=1&mute=0"
                allow="autoplay; encrypted-media"
                allowfullscreen>
            </iframe>
        </div>
        <a href="index.php">
            <button class="volver">← Volver al inicio</button>
        </a>
    </main>
    <?php
    }
?>  
</body>
</html>