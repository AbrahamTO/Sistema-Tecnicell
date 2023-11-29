<?php
class Clientes
{
    public int $id_cliente;
    public string $nombres;
    public string $equipo;
    public string $imei;
    public string $detalles;
    public string $numero;
    public string $fecha_registro;
    public string $fecha_salida;
    public string $estado;
    public string $precio;

    public function Registro($con)
    {
        $query = "INSERT INTO cliente(nombres, equipo , imei, detalles, numero, fecha_registro, fecha_salida, estado, precio)
        VALUES('$this->nombres', '$this->equipo', '$this->imei','$this->detalles', '$this->numero', '$this->fecha_registro', '$this->fecha_salida', '$this->estado','$this->precio');";

        return mysqli_query($con, $query);
    }

    public function Consultar($con)
    {
        $query = "SELECT * FROM cliente ORDER BY id_cliente DESC;";
        return mysqli_query($con, $query);
    }

    public function Buscar($con)
    {
        $query = "SELECT * FROM cliente WHERE id = $this->id_cliente;";
        $res = mysqli_query($con, $query);
        return mysqli_fetch_assoc($res);
    }

    public function Modificar($con)
    {
        $query = "UPDATE cliente
        SET nombres = '$this->nombres', equipo = '$this->equipo', imei = '$this->imei', detalles = '$this->detalles',
        numero = '$this->numero', fecha_registro = '$this->fecha_registro', fecha_salida = '$this->fecha_salida', estado = '$this->estado', precio = '$this->precio' 
        WHERE id_cliente = '$this->id_cliente';";
        return mysqli_query($con, $query);
    }

    public function Eliminar($con)
    {
        $query = "DELETE FROM cliente WHERE id_cliente = '$this->id_cliente';";
        $result = mysqli_query($con, $query);

        $reorganizeQuery = "SET @counter = 0;
                        UPDATE cliente SET id_cliente = @counter := @counter + 1;
                        ALTER TABLE cliente AUTO_INCREMENT = 1;";
        mysqli_multi_query($con, $reorganizeQuery);

        return $result;
    }
}
