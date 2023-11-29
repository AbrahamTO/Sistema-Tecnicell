<?php

require_once 'clases/clsProductos.php';

$productos = new Productos();

if (isset($_POST['ingresar_productos'])) {
    $add_nombres = mysqli_real_escape_string($con, $_POST['add_nombres'] ?? '');
    $add_cantidad = mysqli_real_escape_string($con, $_POST['add_cantidad'] ?? '');
    $add_categoria = mysqli_real_escape_string($con, $_POST['add_categoria'] ?? '');
    $add_precio = mysqli_real_escape_string($con, $_POST['add_precio'] ?? '');
    $add_stock = mysqli_real_escape_string($con, $_POST['add_stock'] ?? '');
    $add_devuelto = mysqli_real_escape_string($con, $_POST['add_devuelto'] ?? '');


    if (strlen($mensaje) > 0) {
        AlertaAdvertencia($mensaje);
    } else {
        $productos->nombres = $add_nombres;
        $productos->cantidad = $add_cantidad;
        $productos->categoria = $add_categoria;
        $productos->precio = $add_precio;
        $productos->stock = $add_stock;
        $productos->devuelto = $add_devuelto;
        $res = $productos->Registro($con);
        if ($res) {
            $_SESSION['mensaje'] = "<b>Producto registrado exitosamente</b>";
            echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=productos" />  ';
        } else {
            AlertaError('<b>Error al registrar producto</b>');
        }
    }
} else if (isset($_POST['modificar_productos'])) {
    $nombres = mysqli_real_escape_string($con, $_POST['nombres'] ?? '');
    $cantidad = mysqli_real_escape_string($con, $_POST['cantidad'] ?? '');
    $categoria = mysqli_real_escape_string($con, $_POST['categoria'] ?? '');
    $precio = mysqli_real_escape_string($con, $_POST['precio'] ?? '');
    $stock = mysqli_real_escape_string($con, $_POST['stock'] ?? '');
    $devuelto = mysqli_real_escape_string($con, $_POST['devuelto'] ?? '');
    $id_productos = $_POST['id_productos'];

    if (strlen($mensaje) > 0) {
        AlertaAdvertencia($mensaje);
    } else {
        $productos->nombres = $nombres;
        $productos->cantidad = $cantidad;
        $productos->categoria = $categoria;
        $productos->precio = $precio;
        $productos->stock = $stock;
        $productos->devuelto = $devuelto;
        $productos->id_productos = $id_productos;
        $res = $productos->Modificar($con);
        if ($res) {
            $_SESSION['mensaje'] = "<b>Productos modificado exitosamente</b>";
            echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=productos" />  ';
        } else {
            AlertaError('<b>Error al modificar producto</b>');
        }
    }
} else if (isset($_POST['eliminar_productos'])) {
    $id_productos = $_POST['delete_id'];
    $productos->id_productos = $id_productos;
    $res = $productos->Eliminar($con);
    if ($res) {
        $_SESSION['mensaje'] = "<b>Producto eliminado exitosamente</b>";
        echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=productos" />  ';
    } else {
        AlertaError('<b>Error al eliminar producto</b>');
    }
}

$res = $productos->Consultar($con);

require 'views/productos.view.php';
