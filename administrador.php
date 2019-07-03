<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador
       </title>
</head>
<body>
    <form  method="GET" action="#">
        <input type="submit" name="salir" value="Cerrar Sesion">
    </form> 
   <?php
    session_start();
    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: login.php');
        }
    }
     if(isset($_GET['salir'])){
        session_unset(); 
        
        session_destroy(); 
                header('location: login.php');
                

    }
?> 
    <h1>Administrador</h1>
    
    
</body>
</html>