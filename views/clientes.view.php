<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Clientes</h1>
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" id="searchCliente" class="form-control" placeholder="Buscar por nombre de cliente">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-center">
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
                                    <th>IMEI</th>
                                    <th>Detalles</th>
                                    <th>Número</th>
                                    <th>Fecha de registro</th>
                                    <th>Fecha de salida</th>
                                    <th>Estado</th>
                                    <th>Precio</th>
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
                                        <td><?php echo $row['imei'] ?></td>
                                        <td><?php echo $row['detalles'] ?></td>
                                        <td><?php echo $row['numero'] ?></td>
                                        <td><?php echo $row['fecha_registro'] ?></td>
                                        <td><?php echo $row['fecha_salida'] ?></td>
                                        <td><?php echo $row['estado'] ?></td>
                                        <td><?php echo $row['precio'] ?></td>
                                        <td>
                                            <div class="row">
                                                <div>
                                                    <a title="Modificar Cliente" data-toggle="modal" data-target="#EditModal" href="javascript:void(0);" onclick="document.getElementById('id_cliente').value = <?= $row['id_cliente'] ?>;document.getElementById('nombres').value = '<?= $row['nombres'] ?>';document.getElementById('equipo').value = '<?= $row['equipo'] ?>';document.getElementById('imei').value = '<?= $row['imei'] ?>';document.getElementById('detalles').value = '<?= $row['detalles'] ?>';document.getElementById('numero').value = '<?= $row['numero'] ?>';document.getElementById('fecha_registro').value = '<?= $row['fecha_registro'] ?>';document.getElementById('fecha_salida').value = '<?= $row['fecha_salida'] ?>';document.getElementById('estado').value = '<?= $row['estado'] ?>';document.getElementById('precio').value = '<?= $row['precio'] ?>';" class="btn btn-success btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a title="Eliminar Cliente" data-toggle="modal" data-target="#DeleteModal" href="javascript:void(0);" onclick="document.getElementById('delete_id').value = <?= $row['id_cliente'] ?>;document.getElementById('delete_nombre').innerHTML = '<?= $row['nombres'] ?>';" class="btn btn-danger btn-sm borrar">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                                <script>
                                    document.getElementById('searchCliente').addEventListener('keyup', function() {
                                        var input, filter, table, tr, td, i, txtValue;
                                        input = document.getElementById('searchCliente');
                                        filter = input.value.toUpperCase();
                                        table = document.getElementById('example2'); // ID de la tabla de productos
                                        tr = table.getElementsByTagName('tr');

                                        for (i = 0; i < tr.length; i++) {
                                            td = tr[i].getElementsByTagName('td')[1]; // Columna del nombre del producto (ajusta el índice según tu estructura)
                                            if (td) {
                                                txtValue = td.textContent || td.innerText;
                                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                    tr[i].style.display = '';
                                                } else {
                                                    tr[i].style.display = 'none';
                                                }
                                            }
                                        }
                                    });
                                </script>
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
                        <label>IMEI</label>
                        <input type="number" name="add_imei" id="add_imei" class="form-control" placeholder="IMEI del equipo" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="20">
                    </div>
                    <div class="form-group">
                        <label>Detalles</label>
                        <input type="text" name="add_detalles" id="add_detalles" class="form-control" placeholder="Problema y/o solución" required>
                    </div>
                    <div class="form-group">
                        <label>Número</label>
                        <input type="number" name="add_numero" id="add_numero" class="form-control" placeholder="Contacto a llamar" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="9" onkeypress="return validarNumero(event)" required>
                    </div>
                    <div class="form-group">
                        <label>Fecha de registro</label>
                        <input type="date" name="add_fecha_registro" id="add_fecha_registro" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Fecha de salida</label>
                        <input type="date" name="add_fecha_salida" id="add_fecha_salida" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Estado</label>
                        <select type="option" name="add_estado" id="add_estado" class="form-control" name="estado" required>
                            <option value="Recibido">Recibido</option>
                            <option value="Reparado">Reparado</option>
                            <option value="No Reparado">No Reparado</option>
                            <option value="Entregado al cliente">Entregado al cliente</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number" name="add_precio" id="add_precio" class="form-control" placeholder="Precio a pagar" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" onkeypress="return validarNumero(event)" required>
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
                        <label>IMEI</label>
                        <input type="number" name="imei" id="imei" class="form-control" onkeypress="return" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="20">
                    </div>
                    <div class="form-group">
                        <label>Detalles</label>
                        <input type="text" name="detalles" id="detalles" class="form-control" onkeypress="return validarTexto(event)" required>
                    </div>
                    <div class="form-group">
                        <label>Número</label>
                        <input type="number" name="numero" id="numero" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="9" required>
                    </div>
                    <div class="form-group">
                        <label>Fecha de registro</label>
                        <input type="date" name="fecha_registro" id="fecha_registro" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Fecha de salida</label>
                        <input type="date" name="fecha_salida" id="fecha_salida" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Estado</label>
                        <select type="option" name="estado" id="estado" class="form-control" required>
                            <option value="Recibido">Recibido</option>
                            <option value="Reparado">Reparado</option>
                            <option value="No Reparado">No Reparado</option>
                            <option value="Entregado al cliente">Entregado al cliente</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number" name="precio" id="precio" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" onkeypress="return validarNumero(event)" required>
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