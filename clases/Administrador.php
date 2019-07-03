<?php
include '../clases/Usuarios.php';
class Administrador extends Usuarios{

    function DatosAdmin(){
        $ruta = $_SERVER['DOCUMENT_ROOT'].'/taxiseguro/';
        include '../bd/Conexion.php';
        $conexion = new Conexion();
        try{
        $conn = $conexion->abrirConexion();
        $sql = "SELECT * FROM usuario WHERE rol = 1";
        
        $result=$conn->query($sql);
        } catch (Exception $e){
            echo $e->getMessage();
        }
        return $result;
    }
    function SupervisarViajes(){
        
    }
}
