
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/estilos.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <title>Login</title>
    </head>
    <body>
        <div class="contenedor-formulario">
            <div class="wrap">
                <form action="#" class="formulario" name="formulario_registro" method="post">
                    <div>
                        <div class="input-group">
                            <input type="text" id="usuario" name="usuario">
                            <label class="label" for="usuario">Código:</label>
                        </div>

                        <div class="input-group">
                            <input type="password" id="pass" name="password">
                            <label class="label" for="password">Contraseña:</label>
                        </div>
                        <input type="submit" name="submit" id="btn-submit" value="Ingresar">
                    </div>
                </form>
            </div>
        </div>
</form
        <script src="js/Login.js"></script>


        <?php
      include './bd/Conexion.php';
        if(isset($_POST["submit"])){
           $usuario= trim($_POST["usuario"]);
            $password = trim($_POST["password"]);
    
    if($usuario==""){
        echo "<li> campo usuario vacio </li>" ;
    }
    
    else if($password==""){
        echo "<li> campo password vacio </li>";
    }
    
    $lenusuario = strlen($usuario);
    $lenpassword = strlen($password);
    $pattern = '`[0-8]`';  
        
    if(!preg_match($pattern, $usuario)){
        echo "<li> no son numeros </li>";
        }   
        elseif ($lenusuario != 10) {
            echo '<li> usuario debe tener 10 caracteres </li>';       
        }
    
    if(!preg_match($pattern, $password)){
        echo "<li> password solo numeros </li>";
        }   
        elseif ($lenpassword < 8 || $lenpassword > 8) {
            echo '<li> password debe tener 8 caracteres</li>';       
        }
       $request = $_SERVER['REQUEST_METHOD'];
if($request=="POST"){
    
    $usuario = trim($_POST["usuario"]);
    $password = trim($_POST["password"]);
    $response = "ok";
     $usuariodb = "2016210169";
         $passworddb = password_hash("73769973", PASSWORD_DEFAULT);
         
         
         if($usuario==$usuariodb){
             $response = "usuario no encontrado";
         }elseif(password_verify($password, $passworddb)){
             $response= "la contraseña no coincide";
         }
         echo json_encode(["respuesta"=>$response]);
}
//pendiente hacer la conexion a la bs y validar campos
        
        }
        ?>
    </body>
</html>
