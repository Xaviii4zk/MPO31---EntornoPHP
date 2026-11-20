<?php
session_start();
$nuevapregunta="";
$editar="";
$eliminar="";
$accions ="";


if (!isset($_SESSION['usuaris'])) {
    header("Location: index.php");
    exit;
} 

if ($_SESSION['rol'] == 'jugador') {
  $nuevapregunta = "";
  $editar="";
  $eliminar="";
} elseif ($_SESSION['rol'] == 'admin') {
  $nuevapregunta = '<a class="btn" href="pregunta_formulari.php">+ Nova pregunta</a>';
  $editar = '                  <a class="btn btn-sec" href="pregunta_formulari.php"
                    >Editar</a
                  >';
  $eliminar = '<button class="btn btn-perill" type="button">Eliminar</button>';
  $accions='<th>Accions</th>';
};


?>
<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Administració</title>
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
        <div class="navegacio">
          <div>
            <h1>Gestió de preguntes</h1>
            <p class="subtitol">Banc de preguntes del Trivial</p>
          </div>
          <?php
            $nuevapregunta;
          ?>
        </div>
        <div class="taula-responsive">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th>Enunciat</th>
                <?php $accions; ?>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Geografia</td>
                <td>Quin és el continent amb més superfície?</td>
                <td>
                  <?php $editar; ?>
                  <?php $eliminar; ?>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Història</td>
                <td>En quin any va començar la Revolució Francesa?</td>
                <td>
                  <?php $editar; ?>
                  <?php $eliminar; ?>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Ciència i natura</td>
                <td>Quin planeta és conegut com el planeta vermell?</td>
                <td>
                  <?php $editar; ?>
                  <?php $eliminar; ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <p class="nota">
          Les accions són decoratives: VOSALTRES heu de programar el CRUD, la
          confirmació d'eliminació i la protecció del rol. 
        </p>
      </section>
    </main>
    <footer class="peu">AQUEST FOOTER HA DE SER REUTILITZABLE</footer>
  </body>
</html>
