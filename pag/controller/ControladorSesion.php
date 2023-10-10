<?php
require_once 'model/Usuario.php';
require_once 'repo/RepositorioUsuario.php';

class ControladorSesion
{
    protected $usuario = null;

    public function login($nombre_usuario, $clave)
    {
        $repo = new RepositorioUsuario();
        $usuario = $repo->login($nombre_usuario, $clave);
        if ($usuario === false)
        {   
            return [false, "Email y/o contraseña erroneos"];
        } 
        else 
        {
            session_start();
            $rol = $usuario->getRol();
            $_SESSION['usuario'] = serialize($usuario);
            return [$rol, "Usuario autenticado correctamente"];
        }
    }

    public function create($cuil, $mail, $roles, $nombre, $apellido, $clave)
    {
        $repo = new RepositorioUsuario();
        $usuario = new Usuario($cuil, $mail, $roles, $nombre, $apellido, $clave, true);
        
        $creat = $repo->save($usuario, $clave);

        if ($creat[0] === false)
        {
            return [ false, $creat[1]];
        }
        else 
        {
            session_start();
            $_SESSION['usuario'] = serialize($usuario);
            return [ true, "Usuario creado correctamente" ];
        }
    }

    public function buscarPorCUIL($cuil)
    {
        $repo = new RepositorioUsuario();
        $usuario = $repo->buscarPorCUIL($cuil);
        return $usuario;
    }


    public function modificar($cuil, $email, $roles, $nombre, $apellido, $estado, $clave)
    {
        $usuario = new Usuario($cuil, $email, $roles, $nombre, $apellido, $estado);
        $repo = new RepositorioUsuario();

        if ($repo->actualizar($usuario,$clave))
        {
            session_start();
            $_SESSION['usuario'] = serialize($usuario);

            return [true, "Los datos se actualizaron correctamente"];
        } 
        else
        {
            return [false, "Error al actualizar los datos"];
        }
    }

    public function insertarPublicacion($cuil, $titulo, $imagen_destino, $descripcion, $fechaHora)
    {
        $repo = new RepositorioUsuario();

        // Crea una instancia de la clase Publicacion con los datos proporcionados
        $publicacion = new Publicacion(null, $cuil, $titulo, $imagen_destino, $descripcion, $fechaHora);
        
        $resultado = $repo->insertarPublicacion($publicacion);
    
        if ($resultado[0]) {
            session_start();
            return [true, "La publicación se ha guardado correctamente"];
        } else {
            return [false, "Error al guardar la publicación: " . $resultado[1]];
        }
    }

    public function obtenerUltimasPublicaciones()
    {
        $repo = new RepositorioUsuario();
        return $repo->obtenerUltimasPublicaciones();
    }
}
?>