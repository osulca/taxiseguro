<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>AdminTaxiSeguro</title>
  </head>
  <body>     
<?php
        $ruta = $_SERVER['DOCUMENT_ROOT'].'/taxiseguro/';
        
        include  '../controladores/ControladorAdministrador.php';    
        
        $controladorAdministrador = new ControladorAdministrador();
        $administradores = $controladorAdministrador->mostrarAdmin();
        
        echo '<div class="datos" style=" position: relative; padding-left:20px;top: 40px;left:500px;height: auto; width: 150px; background-color: #cccccc;">';
        try{
        foreach ($administradores as $administrador){
            //$foto=$administrador["foto"];
            $nom=$administrador["nombres"];
            
            echo //'<img src="'.$foto.'"width=100" heigth="100"<br>'.
                 '<text style="font-size: 20px">'.
                 $nom."<br>".
             "</div>";
          
        } 
        
        } catch (Exception $e){
            echo $e->getMessage();
        }
        echo "<center>";  
        
        echo    '<div class = "v-admin">
                    <form  action = "#"  method = "get">
                        <button type="button" class="btn btn-dark btn-lg" style="height: 55px; width: 190px;">
                            <font style="vertical-align: inherit">Registrar vehículos<font>
                        </button>                    
                        <button type="button" class="btn btn-dark btn-lg" style="height: 55px; width: 190px;">
                            <font style="vertical-align: inherit">Mostrar Registros<font>
                        </button>
                    </form>
                 </div>';
        
        echo "</center>";
        ?>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>