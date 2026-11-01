<?php


if (!isset($_SESSION["libros"])) {
    $_SESSION["libros"]  = [
        [
            'id' => 0,
            'titulo' => 'Don Quijote de la Mancha',
            'autor' => 'Miguel de Cervantes',
            'imagen' => 'https://mestasediciones.com/storage/2020/06/C18-Don-Quijote-1.jpg',
            'descripcion' => 'Libro jodidamente tocho',
        ],
    ];
};

$id = count($_SESSION['libros']);

function agregarLibro($id, $Titulo, $Autor, $Imagen, $Descripcion) {
    $libro = [
        'id' => $id,
        'titulo' => $Titulo,
        'autor' => $Autor,
        'imagen' => $Imagen,
        'descripcion' => $Descripcion,
    ];

    array_push($_SESSION["libros"], $libro);
}

function editarLibro($id, $Titulo, $Autor, $Imagen, $Descripcion) {
    if (isset($_SESSION['libros'][$id])) {
        $_SESSION['libros'][$id] = [
            "id" => $id,
            "titulo" => $Titulo,
            "autor" => $Autor,
            "imagen" => $Imagen,
            "descripcion" => $Descripcion
        ];
    }
}

function eliminarLibro($id) {
    unset($_SESSION["libros"][$id]);
    $_SESSION["libros"] = array_values($_SESSION["libros"]);
}



?>