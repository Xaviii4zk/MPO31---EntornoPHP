<?php
session_start();
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
};

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usuari'], $_POST['password'])) {
  if ($_SESSION['usuaris']['usuari'] == $_POST['usuari'] && $_SESSION['usuaris']['password'] == $_POST['password']) {
    
  }
}

?>
<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
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
        <h1>Iniciar sessió</h1>
        <p class="subtitol">Accedeix com a jugador o administrador.</p>
        <form action="#" method="post">
          <label class="camp"
            >Nom d'usuari<input name="usuari" type="text" required /></label
          ><label class="camp"
            >Contrasenya<input
              name="password"
              type="password"
              required /></label
          ><button class="btn" type="submit">Entrar</button>
        </form>
        <p class="nota">
          La versió PHP ha de verificar la contrasenya i redirigir segons el
          rol.
        </p>
      </section>
    </main>
    <footer class="peu">AQUEST FOOTER HA DE SER REUTILITZABLE</footer>
  </body>
</html>
