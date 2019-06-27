<?php

 try{
                $resultado = $conn->query("SELECT * FROM estudiantes");                                
                echo "<table border='1'>".
                        "<tr>".
                            "<th>Codigo</th>".
                            "<th>Estudiante</th>".
                            "<th>Sexo</th>".
                            "<th>&nbsp</th>".
                            "<th>&nbsp</th>".
                        "</tr>";
                foreach($resultado as $key=>$estudiante){
                    echo "<tr>".
                            "<td>".$estudiante["codigo"]."</td>".
                            "<td>".$estudiante["apellidos"].", ".$estudiante["nombres"]."</td>".
                            "<td>".$estudiante["sexo"]."</td>".
                            "<td><a href='actualizar.php?id=".$estudiante["id"]."'>Actualizar</a></td>".
                            "<td><a href='eliminar.php?id=".$estudiante["id"]."'>Eliminar</a></td>".
                         "</tr>";
                }
                echo "</table>";
                $conexionDB->cerrarConexion();

        }
        // hola
        catch (Exception $e){
            echo $e->getMessage();
        }
        ?>
    </body>
</html>
