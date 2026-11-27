
<?php
require_once('config.php');

try {
    $pdo = db();
} catch (PDOException $e){
    die('ERROR DE CONEXIÓN: '.$e->getMessage());
}

$id = $_POST['id'];

$sql = '
    DELETE FROM personatges
    WHERE id = :id
';

$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

header('Location: index.php');
exit;
?>