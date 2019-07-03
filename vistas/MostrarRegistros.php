<!DOCTYPE html>
<html lang="español">
    <head>
        <title>Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/sweet-alert.css">
        <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" href="../css/style.css">

    </head>
    <body>
        <div class="container-fluid"><br>
            <form action="#" name="filtrar-datos" method="post">
                <div class="form-row" >
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="viaje" name="BUSCAR VIAJE">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="submit" class="btn btn-danger btn-block" name="buscar" value="BUSCAR VIAJE" />
                    </div>                       
                </div>
            </form>

            <h2 class="text-center all-tittles">Listado de Viajes</h2>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">
                        <div class="div-table-cell" style="width: 6%;">CODIGO</div>
                        <div class="div-table-cell" style="width: 22%;">FECHA</div>
                        <div class="div-table-cell" style="width: 22%;">HORA</div>
                        <div class="div-table-cell" style="width: 10%;">CODIGO</div>
                        <div class="div-table-cell" style="width: 10%;">PLACA</div>
                        <div class="div-table-cell" style="width: 8%;">ELIMINAR</div>
                    </div>
                </div>
            </div>
            <?php
            include '../bd/Conexion.php';
            $conexion = new Conexion();
            $conn = $conexion->abrirConexion();
            try {

                $resultado = $conn->query("SELECT * FROM viaje");
                foreach ($resultado as $key => $viaje) {
                    echo "<div class = 'table-responsive'>";
                    echo "<div class = 'div-table' style = 'margin:0 !important;'>";
                    echo "<div class = 'div-table-row div-table-row-list'>";
                    echo "<div class = 'div-table-cell' style = 'width: 6%;'>" . $viaje["idviaje"] . "</div>";
                    echo "<div class = 'div-table-cell' style = 'width: 22%;'>" . $viaje["fecha"] . "</div>";
                    echo "<div class = 'div-table-cell' style = 'width: 22%;'>" . $viaje["hora"] . "</div>";
                    echo "<div class = 'div-table-cell' style = 'width: 10%;'>" . $viaje["codigo"] . "</div>";
                    echo "<div class = 'div-table-cell' style = 'width: 10%;'>" . $viaje["placa"] . "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                $conexion->cerrarConexion();
            } catch (Exception $e) {
                echo $e->getMessage();
            }

            if (isset($_POST["buscar"])) {
                $path = $_SERVER['DOCUMENT_ROOT'] . "/taxiseguro";
             
                include $path . "/bd/Conexion.php";
                $fecha = $_POST["viaje"];
                $conn = $conexion->abrirConexion();
                try {
                    $resultado = $conn->query("SELECT * FROM viaje where fercha='$fecha'");
                    foreach ($resultado as $key => $vehiculo) {
                    }
                   
                    $conexion->cerrarConexion();
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
            ?>
        </div>
    </body>
</html>