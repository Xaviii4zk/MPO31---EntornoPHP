<?php
require_once('config.php');

//Obtenim la connexió de bd
try {
    $pdo = db();
} catch (PDOException $e){
    die('ERRORRR DE CONEXIÓN!! AMB BASE DE DADES'.$e->getMessage());
}

// Obtenim l'id del personatge
$id = $_GET['id'];

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
    WHERE p.id = :id
';

$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

$personatge = $stmt->fetch();

if (!$personatge) {
    die('Personatge no trobat');
}
?>

<!doctype html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Detall del personatge</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <main class="detall">
    <a href="index.php" class="tornar">← Tornar a la col·lecció</a>

    <h1><?= $personatge['nom'] ?></h1>

    <img src="<?= $personatge['imatge'] ?>" class="imatge-detall">

    <div class="informacio">
      <p>
        <strong>Videojoc:</strong>
        <?= $personatge['videojoc'] ?>
      </p>

      <p>
        <strong>Propietari:</strong>
        <?= $personatge['propietari'] ?>
      </p>

      <p>
        <strong>Descripció:</strong>
        <?= $personatge['descripcio'] ?>
      </p>

      <p>
        <strong>Creat el:</strong>
        <?= $personatge['creat_el'] ?>
      </p>
    </div>
  </main>
</body>
</html>