<?php
require_once('config.php');

//Obtenim la connexió de bd
try {
    $pdo = db();
    echo 'funciona! <br><br>';
} catch (PDOException $e){
    die('ERRORRR DE CONNEXIÓN!! AMB BASE DE DADES'.$e->getMessage());
}
$sql = '
    SELECT
        p.id,
        p.nom,
        p.descripcio,
        v.nom AS videojoc,
        u.nom AS propietari
    FROM personatges AS p
    JOIN videojocs AS v
        ON v.id = p.videojoc_id
    JOIN usuaris AS u
        ON u.id = p.usuari_id
    ORDER BY p.id DESC
';
$stmt = $pdo->query($sql);
?>

<?php
// uso el metodo fetchAll para convertir este objeto
$videojocs = $stmt->fetchAll();
?>

<pre>
    <?= var_dump($videojocs); ?>
</pre>

<?php
foreach ($videojocs as $joc) {
    echo '<p>' . $joc['nom'] . '</p>';
}
?>