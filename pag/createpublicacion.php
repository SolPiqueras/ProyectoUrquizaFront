<?php
session_start();
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
    <form method="post" class ="d-flex justify-content-center align-items-start flex-column">

        <div class = "form-group">
            <label>Titulo</label>
            <input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required>
        </div>

        <div class = "form-group">
            <label for="imagen">Agregar una imagen</label>
            <input type="file" class="form-control" name="imagen" id="imagen">
        </div>

        <div class = "form-group">
        <label>Descripción</label>
        <textarea name="" id="" cols="30" rows="10" type="text" class="form-control" placeholder="Escriba un texto"  style="resize: none;"></textarea>
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
