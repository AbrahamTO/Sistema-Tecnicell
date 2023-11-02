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
    public string $estado;

    public function Registro($con)
    {
        $query = "INSERT INTO cliente(nombres, imei, equipo, detalles, numero, fecha_registro, estado)
        VALUES('$this->nombres', '$this->equipo', '$this->imei','$this->detalles', '$this->numero', '$this->fecha_registro', '$this->estado');";

        return mysqli_query($con, $query);
    }

    public function Consultar($con)
    {
        $query = "SELECT * FROM cliente;";
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
        numero = '$this->numero', fecha_registro = '$this->fecha_registro', estado = '$this->estado' 
        WHERE id_cliente = '$this->id_cliente';";
        return mysqli_query($con, $query);
    }

    public function Eliminar($con)
    {
        $query = "DELETE FROM cliente WHERE id_cliente = '$this->id_cliente';";
        return mysqli_query($con, $query);
    }
}
