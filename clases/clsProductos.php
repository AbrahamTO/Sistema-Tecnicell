<?php
class Productos
{
    public int $id_productos;
    public string $nombres;
    public string $cantidad;
    public string $categoria;
    public string $precio;
    public string $stock;
    public string $devuelto;

    public function Registro($con)
    {
        $query = "INSERT INTO productos(nombres, cantidad, categoria, precio, stock, devuelto)
        VALUES('$this->nombres', '$this->cantidad', '$this->categoria', '$this->precio', '$this->stock', '$this->devuelto');";

        return mysqli_query($con, $query);
    }

    public function Consultar($con)
    {
        $query = "SELECT * FROM productos ORDER BY id_productos DESC;";
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
        SET nombres = '$this->nombres', cantidad = '$this->cantidad', categoria = '$this->categoria', precio = '$this->precio', stock = '$this->stock', devuelto = '$this->devuelto'
          WHERE id_productos = '$this->id_productos';";
        return mysqli_query($con, $query);
    }

    public function Eliminar($con)
    {
        $query = "DELETE FROM productos WHERE id_productos = '$this->id_productos';";
        $result = mysqli_query($con, $query);

        $reorganizeQuery = "SET @counter = 0;
                        UPDATE productos SET id_productos = @counter := @counter + 1;
                        ALTER TABLE productos AUTO_INCREMENT = 1;";
        mysqli_multi_query($con, $reorganizeQuery);

        return $result;
    }
}
