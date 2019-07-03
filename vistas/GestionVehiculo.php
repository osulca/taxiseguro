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
                
                
                <b>Chofer:</b>
                <form action="#" method="POST" style="width: 500px" enctype="multipart/form-data">
                    <table border="0" style="width: 500px">
                        <tr>
                            <td>Licencia:</td>
                            <td><input type="text" id="licencia" name="licencia"></td>
                        </tr>
                        <tr>
                            <td>Nombre:</td>
                            <td><input type="text" id="nombre" name="nombre"></td>
                        </tr>
                        <tr>
                            <td>Sexo:</td>
                            <td>
                                <select id="sexo" name="sexo">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Fotografia:</td>
                            <td><input type="file" id="fotografia" name="fotografia"></td>
                        </tr> 
                    </table>
                
                <br>
                <b>Vehiculo:</b>
                <table border="0" style="width: 500px">
                        <tr>
                            <td>Placa:</td>
                            <td><input type="text" id="placa" name="placa"></td>
                        </tr>
                        <tr>
                            <td>Modelo:</td>
                            <td><input type="text" id="modelo" name="modelo"></td>
                        </tr>
                        <tr>
                            <td>Color:</td>
                            <td><input type="text" id="color" name="color"></td>
                        </tr>
                        <tr>
                            <td>SOAT:</td>
                            <td><input type="text" id="soat" name="soat"></td>
                        </tr>
                    </table>
                <p>
                    <input type="submit" name="submit" id="RegistroTotal" value="Registrar Chofer y Vehiculo">
                    
                </form>
            </center>
        </div>

        <?php
        
        $ruta = $_SERVER['DOCUMENT_ROOT'].'/taxiseguro/';
        
        include $ruta.'bd/Conexion.php';
        
        $conexionDB = new Conexion();
        $conn = $conexionDB->abrirConexion();
        
        if(isset($_POST["submit"])){
           $licencia= trim($_POST["licencia"]);
           $nombre = trim($_POST["nombre"]);
           $sexo = trim($_POST["sexo"]);
           
           $foto = $_FILES["fotografia"]["tmp_name"];
           
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

            else if($placa==""){
                echo "<li> campo placa vacio </li>";
            }
            
            else if(empty ($foto)){
                echo "<li> campo foto vacio </li>";
            }

            else if($modelo==""){
                echo "<li> campo modelo vacio </li>";
            }

            else if($color==""){
                echo "<li> campo color vacio </li>";
            }

            else if($soat==""){
                echo "<li> campo soat vacio </li>";
            }
            
            else {

            try{
                 $sql1="INSERT INTO vehiculo(placa, modelo, color, soat) VALUES('$placa', '$modelo','$color','$soat') ";
                 $rows1 = $conn->exec($sql1);
                 $conexionDB->cerrarConexion();
                 echo "Entramos vehi"."<br>";

             }catch (Exception $e){
                 echo $e->getMessage();
             }

             try{
                 $sql2="INSERT INTO conductor(licencia,nombre,sexo,fotografia,fk_placa_vehiculo) VALUES('$licencia','$nombre','$sexo','$foto','$placa')";
                 $rows2 = $conn->exec($sql2);
                 $conexionDB->cerrarConexion();
                 echo "Entramos conductor";

             }catch (Exception $e){
                 echo $e->getMessage();
             }
        
            }
}
?>
    </body>
</html>


