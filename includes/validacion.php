<?php
  include_once './bd/Conexion.php';
   $db = new Conexion();
        $usuariomd5= md5($password);
        $query=$db->abrirConexion()->prepare('SELECT *FROM usuario WHERE codigo = :codigo AND password = :password');
        $query->execute(['codigo'=> $codigo , 'password'=> $usuariomd5]);
        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[3];
            
            $_SESSION['rol'] = $rol;
            switch($rol){
                case 1:
                    header('location: administrador.php');
                break;
                case 2:
                header('location: alumno.php');
                break;
                default:
            }
        }else{
            // no existe el usuario
            echo "Nombre de usuario o contraseña incorrecto";
        }
     

?>
