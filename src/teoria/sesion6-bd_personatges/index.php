<?php
require_once('config.php');

//Obtenim la connexió de bd
try {
    $pdo = db();
} catch (PDOException $e){
    die('ERRORRR DE CONEXIÓN!! AMB BASE DE DADES'.$e->getMessage());
}

$sql = '
    SELECT
        p.id,
        p.usuari_id,
        p.videojoc_id,
        p.nom,
        p.descripcio,
        p.imatge,
        p.creat_el,
        v.nom AS videojoc,
        u.nom AS propietari
    FROM personatges AS p
    JOIN usuaris AS u
        ON u.id = p.propietari_id
    JOIN videojocs AS v
        ON v.id = p.videojoc_id
    ORDER BY p.id ASC
';

$stmt = $pdo->query($sql);
?>

<?php
// uso el metodo fetchAll para convertir este objeto
$personatges = $stmt->fetchAll();
?>

<!doctype html>
<html lang="ca">
<head>
  <meta charset="utf-8">
  <title>Personatges DB</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <h1>Col·lecció de personatges</h1>

  <main class="contenidor">
    <?php foreach ($personatges as $personatge): ?>
      <article class="targeta">
        <img src="<?= $personatge['imatge'] ?>" width="200">

        <div class="contingut">
          <h2><?= $personatge['nom'] ?></h2>

          <p>
            <strong>Videojoc:</strong>
            <?= $personatge['videojoc'] ?>
          </p>

          <p>
            <strong>Propietari:</strong>
            <?= $personatge['propietari'] ?>
          </p>

          <p class="descripcio">
            <?= $personatge['descripcio'] ?>
          </p>

          <a href="detall.php?id=<?= $personatge['id'] ?>" class="boto">
            Consultar personatge
          </a>
        </div>

        <div class="acciones">
          <a href="editar_personaje.php?id=<?= $personatge['id'] ?>" class="boto">
            Editar personaje
          </a>

          <form action="eliminar.php" method="POST" onsubmit="return confirm('Segur que vols eliminar aquest personatge?')">
            <input type="hidden" name="id" value="<?= $personatge['id'] ?>">

            <button type="submit" class="boto eliminar">
              Eliminar personaje
            </button>
          </form>
        </div>
      </article>
    <?php endforeach; ?>
  </main>
</body>
</html>
