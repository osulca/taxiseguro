<?php
$ruta = $_SERVER['DOCUMENT_ROOT'].'/taxiseguro/';

include '../bd/autoload.php';
include '../clases/Administrador.php';
class ControladorAdministrador {

    public function mostrarAdmin(){
        
        $admin = new Administrador();
        
        return $admin->DatosAdmin();
    }
}
