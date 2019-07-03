<?php
include 'bd/Conexion.php';
class usuario extends Conexion{
    private $nombre;
    private $codigo;
 
    public function setUser($usuario){
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE codigo = :codigo');
        $query->execute(['codigo' =>$usuario]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombres'];
            $this->codigo = $currentUser['codigo'];
        }
    }
    public function getNombre(){
        return $this->nombre;
    }
}
?>