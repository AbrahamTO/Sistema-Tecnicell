<?php
if(!empty($_POST['btnAdd']))
    {
        if(!empty($_POST["nombre"]) and 
           !empty($_POST["equipo"]) and 
           !empty($_POST["detalle"]) and
           !empty($_POST["numero"]) and
           !empty($_POST["fecha_reg"]) and
           !empty($_POST["estado"]))
           {
            $nombre=$_POST["nombre"];
            $equipo=$_POST["equipo"];
            $detalle=$_POST["detalle"];
            $numero=$_POST["numero"];
            $fecha_reg=$_POST["fecha_reg"];
            $estado=$_POST["estado"];

            $sql=$conexion->query(" insert into cliente(nombres,equipo,detalles,numero,fecha_registro,estado) values
                                 ('$nombre','$equipo','$detalle','$fecha_reg','$numero','$estado')");
            if ($sql==1)
            {
                echo '<div class="alert alert-success">Persona registrada correctamente</div>';
            }
            else
            {
                echo '<div class="alert alert-danger">Error al registrar</div>';
            }
           }
        else
        {
            echo '<div class="alert alert-warning">Algún campo vacio</div>';

        }
    }
