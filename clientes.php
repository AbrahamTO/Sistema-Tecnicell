<?php

require_once 'clases/clsClientes.php';

$cliente = new Clientes();

if (isset($_POST['ingresar_cliente'])) {
    $add_nombres = mysqli_real_escape_string($con, $_POST['add_nombres'] ?? '');
    $add_equipo = mysqli_real_escape_string($con, $_POST['add_equipo'] ?? '');
    $add_detalles = mysqli_real_escape_string($con, $_POST['add_detalles'] ?? '');
    $add_numero = mysqli_real_escape_string($con, $_POST['add_numero'] ?? '');
    $add_fecha_registro = mysqli_real_escape_string($con, $_POST['add_fecha_registro'] ?? '');
    $add_estado = mysqli_real_escape_string($con, $_POST['add_estado'] ?? '');


    if (strlen($mensaje) > 0) {
        AlertaAdvertencia($mensaje);
    } else {
        $cliente->nombres = $add_nombres;
        $cliente->equipo = $add_equipo;
        $cliente->detalles = $add_detalles;
        $cliente->numero = $add_numero;
        $cliente->fecha_registro = $add_fecha_registro;
        $cliente->estado = $add_estado;
        $res = $cliente->Registro($con);
        if ($res) {
            $_SESSION['mensaje'] = "<b>Cliente registrado exitosamente</b>";
            echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=clientes" />  ';
        } else {
            AlertaError('<b>Error al registrar cliente</b>');
        }
    }
} else if (isset($_POST['modificar_cliente'])) {
    $nombres = mysqli_real_escape_string($con, $_POST['nombres'] ?? '');
    $equipo = mysqli_real_escape_string($con, $_POST['equipo'] ?? '');
    $detalles = mysqli_real_escape_string($con, $_POST['detalles'] ?? '');
    $numero = mysqli_real_escape_string($con, $_POST['numero'] ?? '');
    $fecha_registro = mysqli_real_escape_string($con, $_POST['fecha_registro'] ?? '');
    $estado = mysqli_real_escape_string($con, $_POST['estado'] ?? '');
    $id_cliente = $_POST['id_cliente'];

    if (strlen($mensaje) > 0) {
        AlertaAdvertencia($mensaje);
    } else {
        $cliente->nombres = $nombres;
        $cliente->equipo = $equipo;
        $cliente->detalles = $detalles;
        $cliente->numero = $numero;
        $cliente->fecha_registro = $fecha_registro;
        $cliente->estado = $estado;
        $cliente->id_cliente = $id_cliente;
        $res = $cliente->Modificar($con);
        if ($res) {
            $_SESSION['mensaje'] = "<b>Cliente modificado exitosamente</b>";
            echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=clientes" />  ';
        } else {
            AlertaError('<b>Error al modificar cliente</b>');
        }
    }
} else if (isset($_POST['eliminar_cliente'])) {
    $id_cliente = $_POST['delete_id'];
    $cliente->id_cliente = $id_cliente;
    $res = $cliente->Eliminar($con);
    if ($res) {
        $_SESSION['mensaje'] = "<b>Cliente eliminado exitosamente</b>";
        echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=clientes" />  ';
    } else {
        AlertaError('<b>Error al eliminar cliente</b>');
    }
}

$res = $cliente->Consultar($con);

require 'views/clientes.view.php';
