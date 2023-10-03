<?php
require_once 'controller/ControladorSesion.php';
require_once 'model/Usuario.php';

   $cs = new ControladorSesion();
    $login = $cs->login($_POST['usuario'], $_POST['clave']);
    if ($login[0] === false) {
        $redirigir = 'home.php?mensaje=' . $login[1];
    }
    else {
        if (isset($_SESSION['usuario'])) {
            $usuario = unserialize($_SESSION['usuario']);

            if (in_array(0,$usuario->getRol())){
                
                $redirigir ='home-admin.php';
            }else if (count($usuario->getRol())>1){            
            
                 //  header('Location: PAGINA DE MULTIPLES ROLES.php');
            } else{
                switch($usuario->getRol()){

                // Redirige a los módulos
                    case 1: 
                        $redirigir = '#'; break;
                    case 2: 
                        $redirigir = '#'; break;
                    case 3: 
                        $redirigir = '#'; break;
                    case 4: 
                        $redirigir = '#'; break;
                    case 5: 
                        $redirigir = '#'; break;
                }
            }
        }
    }

header('Location: '.$redirigir);
?>