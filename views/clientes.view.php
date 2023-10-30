<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Clientes</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <button title="Agregar" type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddModal">
                        <i class="fas fa-plus"></i> Agregar Nuevo Cliente
                    </button>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombres</th>
                                    <th>Equipo</th>
                                    <th>Detalles</th>
                                    <th>Número</th>
                                    <th>Fecha de registro</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($res)) :
                                ?>
                                    <tr>
                                        <td><?php echo $row['id_cliente'] ?></td>
                                        <td><?php echo $row['nombres'] ?></td>
                                        <td><?php echo $row['equipo'] ?></td>
                                        <td><?php echo $row['detalles'] ?></td>
                                        <td><?php echo $row['numero'] ?></td>
                                        <td><?php echo $row['fecha_registro'] ?></td>
                                        <td><?php echo $row['estado'] ?></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a title="Modificar Cliente" data-toggle="modal" data-target="#EditModal" href="javascript:void(0);" onclick="document.getElementById('id_cliente').value = <?= $row['id_cliente'] ?>;document.getElementById('nombres').value = '<?= $row['nombres'] ?>';document.getElementById('equipo').value = '<?= $row['equipo'] ?>';document.getElementById('detalles').value = '<?= $row['detalles'] ?>';document.getElementById('numero').value = '<?= $row['numero'] ?>';document.getElementById('fecha_registro').value = '<?= $row['fecha_registro'] ?>';document.getElementById('estado').value = '<?= $row['estado'] ?>';" class="btn btn-success btn-sm">
                                                        <i class="fas fa-edit"></i> Modificar
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a title="Eliminar Cliente" data-toggle="modal" data-target="#DeleteModal" href="javascript:void(0);" onclick="document.getElementById('delete_id').value = <?= $row['id_cliente'] ?>;document.getElementById('delete_nombre').innerHTML = '<?= $row['nombres'] ?>';" class="btn btn-danger btn-sm borrar">
                                                        <i class="fas fa-trash"></i> Eliminar
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<div class="modal fade" id="AddModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" id="defaultModalLabel">Registrar cliente</h4>
            </div>
            <div class="modal-body">
                <form action="panel.php?modulo=clientes" id="ingresar" method="POST">
                    <div class="form-group">
                        <label>Nombres</label>
                        <input type="text" name="add_nombres" id="add_nombres" class="form-control" placeholder="Nombres del cliente" onkeypress="return validarTexto(event)" required>
                    </div>
                    <div class="form-group">
                        <label>Equipo</label>
                        <input type="text" name="add_equipo" id="add_equipo" class="form-control" placeholder="Modelo del equipo" required>
                    </div>
                    <div class="form-group">
                        <label>Detalles</label>
                        <input type="text" name="add_detalles" id="add_detalles" class="form-control" placeholder="Problema y/o solución" required>
                    </div>
                    <div class="form-group">
                        <label>Número</label>
                        <input type="number" name="add_numero" id="add_numero" class="form-control" placeholder="Contacto a llamar" onkeypress="return validarNumero(event)" required>
                    </div>
                    <div class="form-group">
                        <label>Fecha de registro</label>
                        <input type="date" name="add_fecha_registro" id="add_fecha_registro" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Estado</label>
                        <select type="option" name="add_estado" id="add_estado" class="form-control" name="estado" required>
                            <option value="Pendiente">Pendiente</option>
                            <option value="Finalizado">Finalizado</option>
                        </select>
                    </div>

                    <input type="submit" name="ingresar_cliente" Value="Registrar" class="btn btn-primary">

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="EditModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title" id="defaultModalLabel">Editar Cliente</h4>
            </div>
            <div class="modal-body">

                <form action="panel.php?modulo=clientes" method="POST">
                    <input type="hidden" name="id_cliente" id="id_cliente" value="">

                    <div class="form-group">
                        <label>Nombres</label>
                        <input type="text" name="nombres" id="nombres" class="form-control" onkeypress="return validarTexto(event)" required>
                    </div>
                    <div class="form-group">
                        <label>Equipo</label>
                        <input type="text" name="equipo" id="equipo" class="form-control" onkeypress="return" required>
                    </div>
                    <div class="form-group">
                        <label>Detalles</label>
                        <input type="text" name="detalles" id="detalles" class="form-control" onkeypress="return validarTexto(event)" required>
                    </div>
                    <div class="form-group">
                        <label>Número</label>
                        <input type="number" name="numero" id="numero" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Fecha de registro</label>
                        <input type="date" name="fecha_registro" id="fecha_registro" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Estado</label>
                        <select type="option" name="estado" id="estado" class="form-control" required>
                            <option value="Pendiente">Pendiente</option>
                            <option value="Finalizado">Finalizado</option>
                        </select>
                    </div>

                    <input type="submit" name="modificar_cliente" id="modificar_cliente" Value="Actualizar" class="btn btn-success">

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title" id="defaultModalLabel">Eliminar Cliente</h4>
            </div>
            <div class="modal-body">

                <form action="panel.php?modulo=clientes" method="POST">
                    <input type="hidden" name="delete_id" id="delete_id" value="">

                    <strong>
                        <p id="delete_nombre"></p>
                    </strong></label>


                    <div class="form-group">
                        <label class="mr-sm-2">¿Deseas eliminar este cliente?</label>
                    </div>

                    <input type="submit" name="eliminar_cliente" id="eliminar_cliente" Value="Eliminar" class="btn btn-danger">

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>