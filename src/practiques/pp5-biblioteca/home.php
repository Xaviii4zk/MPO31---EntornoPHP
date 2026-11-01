<?php
session_start();

include 'functions.php';

if (!isset($_SESSION["Usuario"])) {
    header("Location: login.php");
    exit;
}

$AdminFOTO = "https://cdn-icons-png.flaticon.com/512/4358/4358508.png";

foreach ($_SESSION["libros"] as $clave => $libro) {
    if (!isset($libro["titulo"])) {
        unset($_SESSION["libros"][$clave]);
    } else {
        $_SESSION["libros"][$clave]["id"] = $clave;    }
}

$libros = $_SESSION["libros"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Virtual - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <header class="bg-light py-3 mb-4 shadow-sm">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <?php
                if ($_SESSION["Usuario"] == 'reader') {
                    echo '<img src="' . $_SESSION["URL"] . '" alt="Foto de perfil" class="w-25 rounded-circle me-3">';
                } else {
                    echo '<img src="' . $AdminFOTO . '" alt="Foto de perfil" class="w-25 rounded-circle me-3">';
                }
                ?>
                <div>
                    <h4 class="m-0">👋 Bienvenido, <?= $_SESSION["Usuario"] ?>!</h4>
                    <?php
                    if ($_SESSION["Usuario"] == 'admin') {
                        echo '<p class="text-muted m-0"><i class="fas fa-user-shield text-success"></i> Admin ✏️</p>';
                    } else {
                        echo '<p class="text-muted m-0">Lector 📚</p>';
                    }
                    ?>
                </div>
            </div>
            <a href="logout.php" class="btn btn-warning btn-sm">
                Cerrar sesión ❌
            </a>
        </div>
    </header>

    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Biblioteca Virtual</h1>
            <p class="lead">Disfruta explorando nuestra colección de libros</p>
        </div>

        <?php
        if ($_SESSION["Usuario"] == 'admin') {
            echo '<div class="text-center mb-4">
                    <a href="add_edit_book.php?accion=agregar" class="btn btn-outline-success btn-lg">
                        <i class="fas fa-plus-circle me-2"></i>Agregar Nuevo Libro
                    </a>
                </div>';
        }
        ?>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <?php foreach ($libros as $libro) { ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="<?= $libro['imagen'] ?>" class="card-img-top" alt="<?= $libro['titulo'] ?>" style="height: 400px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $libro['titulo'] ?></h5>
                            <p class="card-text"><strong>Autor:</strong> <?= $libro['autor'] ?></p>
                            <p class="card-text"><?= $libro['descripcion'] ?></p>
                        </div>

                        <?php
                        if ($_SESSION["Usuario"] == 'admin') {
                            echo '<div class="card-footer d-flex justify-content-between">
                                    <a href="add_edit_book.php?accion=editar&id=' . $libro['id'] . '" class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-edit"></i> Editar
                                    </a>
                                    <a href="delete_book.php?accion=eliminar&id=' . $libro['id'] . '" class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                    </a>
                                </div>';
                        }
                        ?>

                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrY6h0MJhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
