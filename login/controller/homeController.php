<?php
class homeController
{
    private $MODEL;

    public function __construct()
    {
        require_once("c://xampp/htdocs/sistemaventa/login/model/homeModel.php");
        $this->MODEL = new homeModel();
    }

    public function guardarUsuario($correo, $contraseña)
    {
        $correoLimpio = $this->limpiarcorreo($correo);
        $contraseñaLimpia = $this->limpiarcadena($contraseña);
        $contraseñaEncriptada = $this->encriptarcontraseña($contraseñaLimpia);
        $valor = $this->MODEL->agregarNuevoUsuario($correoLimpio, $contraseñaEncriptada);
        return $valor;
    }

    public function limpiarcadena($campo)
    {
        // Eliminar etiquetas HTML y PHP
        $campo = strip_tags($campo);
        // Convertir caracteres especiales en entidades HTML
        $campo = htmlspecialchars($campo, ENT_QUOTES, 'UTF-8');
        return $campo;
    }

    public function limpiarcorreo($campo)
    {
        $campo = strip_tags($campo);
        $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
        $campo = htmlspecialchars($campo);
        return $campo;
    }

    public function encriptarcontraseña($contraseña)
    {
        return password_hash($contraseña, PASSWORD_DEFAULT);
    }

    public function verificarusuario($correo, $contraseña)
    {
        $keydb = $this->MODEL->obtenerclave($correo);
        return (password_verify($contraseña, $keydb)) ? true : false;
    }
}
