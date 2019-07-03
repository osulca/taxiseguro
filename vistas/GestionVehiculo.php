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
        <div id="menu">
            <ul>
                <li>Inicio</li>
                <li class="cerrar sesion">
                    <a href="includes/logout.php">Cerrar Sesion</a>
                </li>
            </ul>
        </div>
        <section>
        <h1>Bienvenido <?php echo $user->getNombre(); ?></h1>
    </section> 
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

?>
    </body>
</html>


