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
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <title>Consultar vehículo</title>
    </head>
    <body>

        <div class="">
            <div class="wrap">
                <form action="" class="" name="" method="get">
                    <div>
                        <p>fecha y hora:</p>
                        <p>CONSULTAR</p>
                        <div class="">
                            Placa: <input type="text" id="placa" name="placa"> <input type="button" value="Buscar" />			
                        </div>

                        <p>DATOS CHOFER</p>
                        <div class="">
                            Nombre: <input type="text" id="nombre" name="nombre" readonly="readonly">			
                        </div>
                        <div class="">
                            DNI: <input type="text" id="dni" name="dni" readonly="readonly">			
                        </div>
                        <div class="">
                            Licencia: <input type="text" id="licencia" name="licencia" readonly="readonly">		
                        </div>
                        <div class="">
                            Sexo: <input type="text" id="sexo" name="sexo" readonly="readonly">			
                        </div>

                        <p>DATOS DEL VEHÍCULO</p>
                        <div class="">
                            Placa: <input type="text" id="placa" name="placa" readonly="readonly">			
                        </div>
                        <div class="">
                            Modelo: <input type="text" id="modelo" name="modelo" readonly="readonly">			
                        </div>
                        <div class="">
                            Color: <input type="text" id="color" name="color" readonly="readonly">		
                        </div>
                        <div class="">
                            SOAT: <input type="text" id="soat" name="soat" readonly="readonly">			
                        </div>

                        <input type="button" id="" value="Tomar colectivo"> <input type="button" id="" value="Salir">
                    </div>
                </form>
            </div>
        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>
