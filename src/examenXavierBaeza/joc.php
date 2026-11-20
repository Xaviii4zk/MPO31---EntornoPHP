<?php
session_start();
include 'dades.php';

if (!isset($_SESSION['preguntes'])) {
    $_SESSION['preguntes'] = [
        [ 'id' => 1, 'categoria' => 'Geografia', 'pregunta' => 'Quin és el continent amb més superfície?', 'opcions' => [ 'Europa', 'Àsia', 'Àfrica', 'Amèrica del Sud' ], 'correcta' => 1 ],
        [ 'id' => 2, 'categoria' => 'Geografia', 'pregunta' => 'Quina és la capital del Canadà?', 'opcions' => [ 'Toronto', 'Vancouver', 'Ottawa', 'Mont-real' ], 'correcta' => 2 ],
        [ 'id' => 3, 'categoria' => 'Història', 'pregunta' => 'En quin any va començar la Revolució Francesa?', 'opcions' => [ '1776', '1789', '1812', '1848' ], 'correcta' => 1 ],
        [ 'id' => 4, 'categoria' => 'Història', 'pregunta' => 'Quin poble va construir Machu Picchu?', 'opcions' => [ 'Maies', 'Asteques', 'Romans', 'Inques' ], 'correcta' => 3 ],
        [ 'id' => 5, 'categoria' => 'Ciència i natura', 'pregunta' => 'Quin planeta és conegut com el planeta vermell?', 'opcions' => [ 'Venus', 'Mart', 'Júpiter', 'Mercuri' ], 'correcta' => 1 ],
        [ 'id' => 6, 'categoria' => 'Ciència i natura', 'pregunta' => 'Quin gas és el més abundant a l\'atmosfera terrestre?', 'opcions' => [ 'Oxigen', 'Diòxid de carboni', 'Nitrogen', 'Hidrogen' ], 'correcta' => 2 ],
        [ 'id' => 7, 'categoria' => 'Art i cultura', 'pregunta' => 'Qui va pintar La nit estelada?', 'opcions' => [ 'Pablo Picasso', 'Claude Monet', 'Salvador Dalí', 'Vincent van Gogh' ], 'correcta' => 3 ],
        [ 'id' => 8, 'categoria' => 'Art i cultura', 'pregunta' => 'Qui va escriure El petit príncep?', 'opcions' => [ 'Jules Verne', 'Antoine de Saint-Exupéry', 'Victor Hugo', 'Albert Camus' ], 'correcta' => 1 ]
    ];
}

if (!isset($_SESSION['index_actual'])) {
    $_SESSION['index_actual'] = 0;
}

$mensaje = "";
$preguntas = $_SESSION['preguntes'];
$indice = $_SESSION['index_actual'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['resposta'])) {
        $respuesta_usuario = ($_POST['resposta']);
        $pregunta_actual = $preguntas[$indice];

        if ($respuesta_usuario == $pregunta_actual['correcta']) {
            $mensaje = "Respuesta correcta";
            $_SESSION['index_actual']++;
        } else {
            $mensaje = "Respuesta incorrecta.";
        }
    }
}
$indice = $_SESSION['index_actual'];
$fin_del_juego = ($indice >= count($preguntas));
?>

<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Trivial</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <!-- AQUEST HEADER HA DE SER REUTILITZABLE -->
    <header class="cap">
      <div class="contenidor navegacio">
        <a class="marca" href="index.php">TRIVIAL Pe1</a>
        <nav class="enllacos">
          <a href="index.php">Inici</a><a href="registre.php">Registre</a
          ><a href="login.php">Login</a><a href="joc.php">Joc</a
          ><a href="admin.php">Administració</a>
        </nav>
      </div>
    </header>
    <main class="contenidor">
      <section class="panell">
        <h1>Hola, Anna!</h1>
        <p class="subtitol">Respon la pregunta i continua avançant.</p>
        <div class="estadistiques">
          <span><strong>Puntuació:</strong> 2 punts</span
          ><span><strong>Progrés:</strong> 3 de 8</span
          ><span><strong>Pendents:</strong> 6</span>
        </div>
        <span class="etiqueta">Geografia</span>
        <h2 style="margin-top: 15px">
          Quin és el continent amb més superfície?
        </h2>      
        
        
        <form method="post" action="#">
          <label class="resposta"
            ><input
              type="radio"
              name="resposta"
              value="0"
              required
            />Europa</label
          ><label class="resposta"
            ><input type="radio" name="resposta" value="1" />Àsia</label
          ><label class="resposta"
            ><input type="radio" name="resposta" value="2" />Àfrica</label
          ><label class="resposta"
            ><input type="radio" name="resposta" value="3" />Amèrica del
            Sud</label
          ><button class="btn" type="submit">Comprovar resposta</button>
        </form>
         
      
              

        <div class="alerta">
        <?= $mensaje; ?>
        </div>
        <p class="nota">
          La pregunta, la puntuació i el progrés són dades fictícies. La versió
          PHP ha d'obtenir-les de la sessió.
        </p>
      </section>
    </main>
    <footer class="peu">AQUEST FOOTER HA DE SER REUTILITZABLE</footer>
  </body>
</html>
