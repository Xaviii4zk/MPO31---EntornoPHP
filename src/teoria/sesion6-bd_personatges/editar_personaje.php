<?php
require_once('config.php');

try {
    $pdo = db();
} catch (PDOException $e){
    die('ERRORRR DE CONEXIÓN!! AMB BASE DE DADES'.$e->getMessage());
}

$id = $_GET['id'];

$sql = '
    SELECT *
    FROM personatges
    WHERE id = :id
';

$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

$personatge = $stmt->fetch();

if (!$personatge) {
    die('Personatge no trobat');
}

$sql = '
    SELECT *
    FROM videojocs
';

$stmt = $pdo->query($sql);
$videojocs = $stmt->fetchAll();

$sql = '
    SELECT *
    FROM usuaris
';

$stmt = $pdo->query($sql);
$usuaris = $stmt->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = '
        UPDATE personatges
        SET
            nom = :nom,
            videojoc_id = :videojoc_id,
            descripcio = :descripcio,
            imatge = :imatge,
            propietari_id = :propietari_id
        WHERE id = :id
    ';

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        'nom' => $_POST['nom'],
        'videojoc_id' => $_POST['videojoc_id'],
        'descripcio' => $_POST['descripcio'],
        'imatge' => $_POST['imatge'],
        'propietari_id' => $_POST['propietari_id'],
        'id' => $id
    ]);

    header('Location: detall.php?id='.$id);
    exit;
}
?>

<!doctype html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Editar personatge</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <main class="detall">

        <h1>Editar personatge</h1>

        <form method="POST">

            <p>
                <label>Nom:</label>
                <input type="text" name="nom" value="<?= $personatge['nom'] ?>" required>
            </p>

            <p>
                <label>Videojoc:</label>
                <select name="videojoc_id" required>
                    <?php foreach ($videojocs as $videojoc): ?>
                        <option value="<?= $videojoc['id'] ?>"
                            <?= $personatge['videojoc_id'] == $videojoc['id'] ? 'selected' : '' ?>>
                            <?= $videojoc['nom'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </p>

            <p>
                <label>Descripció:</label>
                <textarea name="descripcio" required><?= $personatge['descripcio'] ?></textarea>
            </p>

            <p>
                <label>Imatge (URL):</label>
                <input type="text" name="imatge" value="<?= $personatge['imatge'] ?>">
            </p>

            <p>
                <label>Propietari:</label>
                <select name="propietari_id" required>
                    <?php foreach ($usuaris as $usuari): ?>
                        <option value="<?= $usuari['id'] ?>"
                            <?= $personatge['propietari_id'] == $usuari['id'] ? 'selected' : '' ?>>
                            <?= $usuari['nom'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </p>

            <button type="submit" class="boto">Guardar cambios</button>

            <a href="detall.php?id=<?= $id ?>" class="boto">Cancelar</a>

        </form>

    </main>

</body>
</html>