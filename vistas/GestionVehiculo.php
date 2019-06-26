<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <title>Gestión Vehículo</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>

        <div class="" id="formulario">
            
            <center>
                
                <h1>Registrar Chofer y Vehiculo</h1>
            
                <form action="" class="" name="" method="get">
                    <table border="0">
                        <tr>
                            <td>Licencia:</td>
                            <td><input type="text" id="licencia" name="licencia"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nombre:</td>
                            <td><input type="text" id="nombre" name="nombre"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Sexo:</td>
                            <td><input type="text" id="sexo" name="sexo"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Fotografia:</td>
                            <td><input type="image" id="foto" name="foto"></td>
                            <td></td>
                        </tr>
                        
                    </table>
                </form>
                
                <p>
                <input type="button" id="" value="Registrar Chofer">
                </p>
                
            
                <form action="" class="" name="" method="get">
                    <table border="0">
                        <tr>
                            <td>Placa:</td>
                            <td><input type="text" id="placa" name="placa"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Modelo:</td>
                            <td><input type="text" id="modelo" name="modelo"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Color:</td>
                            <td><input type="text" id="color" name="color"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>SOAT:</td>
                            <td><input type="text" id="soat" name="soat"></td>
                            <td></td>
                        </tr>
                    </table>
                </form>
                
                <p>
                <input type="button" id="" value="Registrar Vehiculo">
                
            </center>
        </div>

        <?php
      include './bd/Conexion.php';
        if(isset($_POST["submit"])){
           $licencia= trim($_POST["licencia"]);
           $nombre = trim($_POST["nombre"]);
           $sexo = trim($_POST["sexo"]);
           $foto = trim($_POST["foto"]);
           $placa = trim($_POST["placa"]);
           $modelo = trim($_POST["modelo"]);
           $color = trim($_POST["color"]);
           $soat = trim($_POST["soat"]);
    
    if($licencia==""){
        echo "<li> campo licencia vacio </li>" ;
    }
    
    else if($nombre==""){
        echo "<li> campo nombre vacio </li>";
    }
    
    else if($sexo==""){
        echo "<li> campo nombre vacio </li>";
    }
    
        else if($placa==""){
        echo "<li> campo nombre vacio </li>";
    }
    
    else if($modelo==""){
        echo "<li> campo nombre vacio </li>";
    }
    
    else if($nombre==""){
        echo "<li> campo nombre vacio </li>";
    }
    
    else if($color==""){
        echo "<li> campo nombre vacio </li>";
    }
    
    else if($soat==""){
        echo "<li> campo nombre vacio </li>";
    }
    
    /*
    $lenusuario = strlen($usuario);
    $lenpassword = strlen($password);
    $pattern = '`[0-8]`';  
    */
        
        }
        ?>
    </body>
</html>


