<?php
class Productos
{
    public int $id_productos;
    public string $nombres;
    public string $cantidad;
    public string $categoria;

    public function Registro($con)
    {
        $query = "INSERT INTO productos(nombres, cantidad, categoria)
        VALUES('$this->nombres', '$this->cantidad', '$this->categoria');";

        return mysqli_query($con, $query);
    }

    public function Consultar($con)
    {
        $query = "SELECT * FROM productos;";
        return mysqli_query($con, $query);
    }

    public function Buscar($con)
    {
        $query = "SELECT * FROM productos WHERE id = $this->id_productos;";
        $res = mysqli_query($con, $query);
        return mysqli_fetch_assoc($res);
    }

    public function Modificar($con)
    {
        $query = "UPDATE productos
        SET nombres = '$this->nombres', cantidad = '$this->cantidad', categoria = '$this->categoria'
          WHERE id_productos = '$this->id_productos';";
        return mysqli_query($con, $query);
    }

    public function Eliminar($con)
    {
        $query = "DELETE FROM productos WHERE id_productos = '$this->id_productos';";
        return mysqli_query($con, $query);
    }
}
