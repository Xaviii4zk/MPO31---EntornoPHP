<?php
session_start();
include 'dades.php';

if (!isset($_SESSION['usuaris'])) {
    $_SESSION['usuaris'] = [
        [
            "id" => 1,
            "usuari" => "admin",
            "password" => password_hash("admin123", PASSWORD_DEFAULT),
            "rol" => "admin"
        ],
        [
            "id" => 2,
            "usuari" => "jugador",
            "password" => password_hash("jugador123", PASSWORD_DEFAULT),
            "rol" => "jugador"
        ]
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usuari'], $_POST['password'], $_POST['password2'])) {
    $usuari = trim($_POST['usuari']);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if (!empty($usuari) && !empty($password) && $password === $password2) {
        
        $nouUsuari = [
            "id" => count($_SESSION['usuaris']) + 1,
            "usuari" => $usuari,
            "password" => password_hash($password, PASSWORD_DEFAULT),
            "rol" => "jugador"
        ];

        array_push($_SESSION['usuaris'], $nouUsuari);

        $_SESSION['usuari'] = $nouUsuari['usuari'];
        $_SESSION['rol'] = $nouUsuari['rol'];

        header("Location: joc.php");
        exit;
    } else {
        $error = "Les contrasenyes no coincideixen o hi ha camps buits.";
    }
}

?>
<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registre</title>
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
      <section class="panell ample-mig">
        <h1>Registre de jugador</h1>
        <p class="subtitol">Crea un compte per poder jugar.</p>
        <form action="#" method="post">
          <label class="camp"
            >Nom d'usuari<input
              type="text"
              name="usuari"
              placeholder="Ex.: anna"
              required /></label
          ><label class="camp"
            >Contrassenya<input
              type="password"
              name="password"
              required /></label
          ><label class="camp"
            >Repeteix la contrassenya<input
              type="password"
              name="password2"
              required /></label
          ><button class="btn" type="submit">Registrar-me</button>
        </form>
        <p class="nota">
          Els nous comptes han de tenir sempre el rol de jugador.
        </p>
      </section>
    </main>
    <footer class="peu">AQUEST FOOTER HA DE SER REUTILITZABLE</footer>
  </body>
</html>
