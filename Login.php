<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                <form action="" class="formulario" name="formulario_registro" method="get">
                    <div>
                        <div class="input-group">
                            <input type="text" id="nombre" name="nombre">
                            <label class="label" for="nombre">Código:</label>
                        </div>

                        <div class="input-group">
                            <input type="password" id="pass" name="pass">
                            <label class="label" for="pass">Contraseña:</label>
                        </div>

                        <div class="input-group">
                            <input type="text" id="nombre" name="nombre">
                            <label class="label" for="nombre">DNI:</label>
                        </div>

                        <input type="submit" id="btn-submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>

        <script src="js/Login.js"></script>


        <?php
        // put your code here
        ?>
    </body>
</html>
