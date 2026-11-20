<!doctype html>
<html lang="ca">
<head>
  <meta charset="utf-8">
  <title>Personatges DB</title>
</head>
<body>
  <h1>Col·lecció de personatges</h1>
  <?php foreach ($personatges as $personatge): ?>
    <article>
     <h2><?= $personatge['nom'] ?></h2>
     <p>
       Videojoc:
       <?= $personatge['videojoc'] ?>
     </p>
     <p>
       Propietari:
       <?= $personatge['propietari'] ?>
     </p>
     <p>
       <?= $personatge['descripcio'] ?>
     </p>
    </article>
    <hr>
  <?php endforeach; ?>
</body>
</html>