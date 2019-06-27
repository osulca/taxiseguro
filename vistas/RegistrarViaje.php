<!DOCTYPE html>
<html>
    <head>
        <title>Consultar vehículo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body class="bg-light">
        <div class="card mx-auto mt-5" style="width: 25rem;">
            <div class="card-body container">
                <form action="#" name="formulario_registro" method="post">
                    <div class="form-group">
                        <label class="label" for="fecha-hora">Fecha y Hora:</label>
                        <input type="text" class="form-control" id="fecha-hora" name="fecha-hora"> 
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <label class="label" for="consultar-placa">CONSULTAR PLACA</label>
                    </div>
                    <div class="form-group">
                        <label class="label" for="num-placa">N° de Placa:</label>
                        <input type="text" class="form-control" id="num-placa" name="num-placa">
                        <input type="button" class="btn btn-danger btn-block" name="buscar" value="Buscar Placa" />
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <label class="label" for="datos-vehiculo">DATOS DEL VEHÍCULO</label>
                    </div>
                    <div class="form-group">
                        <label class="label" for="placa">Placa:</label>
                        <input type="text" class="form-control" id="placa" name="placa"> 
                    </div>      
                    
                    <input type="submit" class="btn btn-dark btn-block" name="submit" value="Registrar Viaje">
                </form>
            </div>
        </div>
                    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <?php
        // put your code here
    ?>

    </body>
</html>