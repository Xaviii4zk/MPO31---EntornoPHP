
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION["usuario"] = $_POST["usuario"];
}
echo $_SESSION['usuario'];



?>
<?php
$userCorrecte = "pepe";
$passwordCorrecte = password_hash("12345", PASSWORD_DEFAULT);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST["usuario"] ?? "";
    $password = $_POST["password"] ?? "";
    if ($usuario == $userCorrecte && password_verify($password, $passwordCorrecte)) {
        echo 'vamos bien';
        //ahora tocaria
        //1. Guardar en sesión
        $_SESSION['usuario'] = $usuario;
        //2. redireccionar
        header('Location: inicio.php');
        exit;
        } else {
        echo 'User o contrasñea equivocado';
        //Si el login es incorrecto    
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inicio.php">
        <input type="text" name="usuario">
        <input type="text" name="password">
        <button type="submit">Enviar form</button>
    </form>
</body>
</html>
