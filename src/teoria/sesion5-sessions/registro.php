
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION["usuario"] = $_POST["usuario"];
} else {
    /* header('location: login.php');
    exit;*/
}


/*if (isset($_POST["usuario"])) {
    $_SESSION["usuario"] = $_POST["usuario"];
}
*/
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <input type="text" id="usuario" name="usuario">
        <input type="text" name="password">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
