<?php

class Usuarios {

    private $codigo;
    private $contraseña;

    function getCodigo() {
        return $this->codigo;
    }

    function getContraseña() {
        return $this->contraseña;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }
    
    function ValidarUsuario(){
        
    }
}
