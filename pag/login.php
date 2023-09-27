<?php
require_once 'controller/ControladorSesion.php';

   $cs = new ControladorSesion();
    $login = $cs->login($_POST['usuario'], $_POST['clave']);
    if ($login[0] === false) {
        $redirigir = 'home.php?mensaje=' . $login[1];
    }
    else {

        $redirigir = 'homePrueba.php?mensaje=' . $login[1];
    }

header('Location: '.$redirigir);
?>