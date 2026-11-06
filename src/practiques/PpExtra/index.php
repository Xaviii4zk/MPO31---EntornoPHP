<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inica una partida</title>
</head>
<body>
    <form action="reciclar.php" method="POST">
        <input type="text" name="nombre">
        <button type="submit">Aventurarse</button>
    </form>
</body>
</html>