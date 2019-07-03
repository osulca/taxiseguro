
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="#" method="POST">
        <br/><input type="text" name="codigo" placeholder="Ingrese su codigo"><br/>
       <br/><input type="password" name="password" placeholder="Ingrese su contraseña"><br/>
        <input type="submit" name="submit" value="Iniciar sesión">
    </form>
    <?php
            include_once './bd/Conexion.php';
           
    session_start();
   
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: administrador.php');
            break;
            case 2:
            header('location: alumno.php');
            break;
            default:
        }
    }
    if(isset($_POST['submit'])){
        $codigo = trim($_POST['codigo']);
        $password = trim($_POST['password']);
        
    if($codigo==""){
        echo "<li> campo usuario vacio </li>" ;
        
    }
    
    elseif($password==""){
        echo "<li> campo password vacio </li>";
    }else{
        include_once './includes/validacion.php';
    }
    
    $lencodigo = strlen($codigo);
    $lenpassword = strlen($password);
    $pattern = '`[0-8]`';  
        
    if(!preg_match($pattern, $codigo)){
        echo "<li> no son numeros </li>";
        }   
        elseif ($lencodigo != 10 || $lencodigo != 8) {
            echo '<li> usuario debe tener 10 caracteres(alumnos) o 8 caracteres(Administradores) </li>';       
        }else{
        include_once './includes/validacion.php';
    }
    
    if(!preg_match($pattern, $password)){
        echo "<li> password solo numeros </li>";
        }   
        elseif ($lenpassword < 8 || $lenpassword > 8) {
            echo '<li> password debe tener 8 caracteres</li>';       
        }
      else{
        include_once './includes/validacion.php';
    }      
        
    }

    
        
        ?>
       
</body>
</html>
