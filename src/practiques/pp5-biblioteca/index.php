<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f0f2f5;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .contenedor {
        background-color: white;
        padding: 40px;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 4px 10px #00000020;
    }

    h1 {
        margin-bottom: 15px;
        color: #222;
    }

    p {
        margin-bottom: 20px;
        color: #666;
    }

    button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Bienvenido</h1>
        <p>Pulsa el botón para acceder al login.</p>
        <form action="login.php" method="GET">
            <button type="submit">Ir al login</button>
        </form>
    </div>
</body>
</html>
