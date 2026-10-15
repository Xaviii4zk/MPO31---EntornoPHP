<?php

$logos = ['<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook w-4 h-4"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>',
'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram w-4 h-4"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>',
'<svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24h-6.66l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231 5.45-6.231zm-1.161 17.52h1.833L7.084 4.126H5.117l11.966 15.644z"></path></svg>',
'<svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.3 0 .59.04.86.13V9.4a6.33 6.33 0 0 0-1-.05A6.34 6.34 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43V8.69a8.16 8.16 0 0 0 4.77 1.52V6.76a4.85 4.85 0 0 1-1.04-.07z"></path></svg>'];
$logoMAGIC = '<img src="https://base44.app/api/apps/6a9932dc5138a32310e724a0/files/mp/public/6a9932dc5138a32310e724a0/f8f9ce04c_MGIC.png" alt="OCINE MAGIC" class="h-16 lg:h-20 w-auto object-contain">';
$Secciones = ["CARTELLERA", "BAR", "EL CINEMA", "SCREEN X", "SALA KIDS", "FIDELITY", "ALTRES CINES"];
$SeccionesCartelera = ["Cartellera", "Vose", "Screen X", "Sala Kids", "Esdeveniments", "Venta anticipada", "Properament"];
$fotoCINE = '<img src="imagenes/cine.jpg"';

$NombrePelis = ["Doraemon: aventuras en el mundo del arte", "Tadeo Jones y la lámpara maravillosa",
"DIGGER","Insidious: Fuera del más allá", "CARS (20 ANIVERSARIO)",
"Resident Evil", "La Bola Negra", "Escape room 2", "La maleta",
"Spider-man: Brand New Day"];
$horari = [
    "16:00h",
    "18:15h",
    "20:30h",
    "18:15h",
    "16:00h",
    "20:30h",
    "16:00h",
    "18:15h",
    "20:30h",
    "16:00h"
];

include "pelicules.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Magic</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <header>
        <div class="redes">
            <?php foreach ($logos as $logo) { ?>
                <div class="icono">
                    <?= $logo ?>
                </div>
            <?php 
            } 
            ?>
            <span>ES</span>
            <span>CA</span>
        </div>
        <div class="cabecera">
            <div class="logo">
                <?= $logoMAGIC ?>
            </div>
            <nav>
                <?php foreach ($Secciones as $seccion) { ?>
                    <a href="#"><?= $seccion ?></a>
                <?php 
                } 
                ?>
            </nav>
        </div>
    </header>
    <main>
        <div class="promocion">
            <?= $fotoCINE ?>
        </div>
        <section class="cartelera">
            <div class="titulo">
                <h2>Cartellera</h2>
                <div class="vistas">
                    <span>▦</span>
                    <span>▤</span>
                </div>
            </div>
            <div class="filtros">
                <div class="categorias">
                    <?php foreach ($SeccionesCartelera as $categoria) { ?>
                        <button><?= $categoria ?></button>
                    <?php 
                    } 
                    ?>
                </div>
                <div class="genero">
                    <label for="genero">Escull un gènere:</label>

                    <select name="genero" id="genero">
                        <option value="">Tots els gèneres</option>
                        <option value="accio">Acció</option>
                        <option value="animacio">Animació</option>
                        <option value="terror">Terror</option>
                        <option value="drama">Drama</option>
                    </select>
                </div>
            </div>
            <div class="pelicules">
                <?php for ($i = 0; $i < count($imagenpelis); $i++) { ?>
                    <div class="tarjeta">
                        <img src="<?= $imagenpelis[$i] ?>" alt="Pel·lícula">
                        <div class="infopelis">
                            <h2><?= $NombrePelis[$i] ?></h2>
                            <p>Avui, 10 de Oct..</p>
                            <p class="horari"><?= $horari[$i] ?></p>
                            <a class="boton_dias" href="detall.php?id=<?= $i ?>">VEURE MÉS DIES</a>
                            <div class="separar_info">
                                <div class="trailer">
                                    <a href="trailer.php?id=<?= $i ?>">
                                        <i class="fa-solid fa-caret-right"></i>
                                        <span>TRAILER</span>
                                    </a>
                                </div>
                                <div class="info">
                                    <a href="detall.php?id=<?= $i ?>">
                                        <i class="fa-solid fa-book"></i>
                                        <span>INFO</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                } 
                ?>
            </div>
        </section>
    </main>
</body>
</html>