<?php
session_start();
include 'functions.php';

$id = isset($_GET["id"]) ? trim($_GET["id"]) : null;
if (isset($_POST["eliminar"])) {
    eliminarLibro($_POST["id"]);
    header("Location: home.php");
    exit;
}
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar libro</title>
<style>    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f2f4f7;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .contenedor {
        background-color: white;
        width: 90%;
        max-width: 450px;
        padding: 35px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    h2 {
        color: #252525;
        margin-bottom: 15px;
    }

    p {
        color: #666;
        margin-bottom: 25px;
    }

    .botones {
        display: flex;
        justify-content: center;
        gap: 12px;
    }

    button, .cancelar {
        padding: 12px 18px;
        border: none;
        border-radius: 6px;
        font-size: 15px;
        text-decoration: none;
        cursor: pointer;
    }

    button {
        background-color: #dc3545;
        color: white;
    }

    button:hover {
        background-color: #b02a37;
    }

    .cancelar {
        background-color: #e9ecef;
        color: #333;
    }

    .cancelar:hover {
        background-color: #d6d8db;
    }
</style>
</head>
<body>

    <div class="contenedor">
        <h2>¿Deseas eliminar este libro?</h2>
        <p>Esta acción no se puede deshacer.</p>

        <div class="botones">
            <form action="delete_book.php" method="POST">
                <input type="hidden" name="id" value="<?= $id ?>">

                <button type="submit" name="eliminar">Sí, eliminar libro con id <?= $id ?></button>
            </form>            
            <a href="home.php" class="cancelar">Cancelar</a>
        </div>
    </div>
</body>
</html>
