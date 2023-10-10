<?php
require_once 'controller/ControladorSesion.php';
date_default_timezone_set("America/Argentina/Buenos_Aires");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtiene los valores del formulario
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fechaHora = date('Y-m-d H:i:s');

    // Procesa la imagen si se cargó
    $imagen_path = 'img/publicaciones/';

    if ($_FILES['imagen']['error'] === 0) {
        // Genera un nombre único para la imagen
        $imagen_nombre = uniqid() . '_' . $_FILES['imagen']['name'];
        $imagen_destino = $imagen_path . $imagen_nombre;

        // Mueve la imagen a la carpeta de destino
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen_destino)) {
            // Inserta los datos en la base de datos utilizando el controlador
            $cs = new ControladorSesion();

            // Reemplaza 'tu_cuil' con el valor de cuil del usuario actual
            $cuil = unserialize($_SESSION['usuario'])->getCuil();

            $resultado = $cs->insertarPublicacion($cuil, $titulo, $imagen_destino, $descripcion, $fechaHora);

            if ($resultado[0]) {
                // Éxito: La publicación se ha guardado correctamente en la base de datos   
                session_start();             
                header('Location: createpublicacion.php?mensaje=Publicación creada exitosamente');
                exit();
            } else {
                // Error: No se pudo guardar la publicación en la base de datos
                $error_message = "Error al guardar la publicación en la base de datos: " . $resultado[1];
            }
        } else {
            $error_message = "Error al mover la imagen a la carpeta de destino.";
        }
    } else {
        // Error: No se cargó una imagen válida
        $error_message = "Error al cargar la imagen: " . $_FILES['imagen']['error'];
    }
}

// Si llegaste aquí, algo salió mal, y puedes mostrar un mensaje de error si es necesario
if (isset($error_message)) {
    echo '<div id="mensaje" class="alert alert-danger text-center"><h2>' . $error_message . '</h2></div>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Crear Publicación</title>
</head>
<body class="container">
    <?php
    if (isset($_GET['mensaje'])) {
        echo '<div id="mensaje" class="alert alert-warning text-center">
            <h2>' . $_GET['mensaje'] . '</h2></div>';
    }
    ?>
    <div class="jumbotron text-center">
        <h1>Crear Publicación en Sitio</h1>
    </div>
    <div class="col-8 mx-auto">
    <form method="post" class ="d-flex justify-content-center align-items-start flex-column" action="createpublicacion.php" enctype="multipart/form-data">

        <div class = "form-group">
            <label>Titulo</label>
            <input type="text" name="titulo" class='form-control' maxlength="100" required>
        </div>

        <div class = "form-group">
            <label for="imagen">Agregar una imagen</label>
            <input type="file" class="form-control" name="imagen" id="imagen">
        </div>

        <div class = "form-group">
        <label>Descripción</label>
        <textarea name="descripcion" cols="30" rows="10" type="text" class="form-control" placeholder="Escriba un texto"  style="resize: none;"></textarea>
        </div>

        <div class="col-md-12 pull-right">
            <button type="submit" class="btn btn-primary mb-3">Crear Publicación</button>
        </div>

        <div class="col-md-12 pull-right">
        <a href="home-admin.php" class="btn btn-secondary mb-3">Volver</a>
        </div>

    </form>
    </div>
</body>
</html>
