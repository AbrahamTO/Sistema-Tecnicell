<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Productos</h1>
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" id="searchProduct" class="form-control" placeholder="Buscar por nombre">
                        <div class="input-group-append">
                           <!-- <button id="searchButton" class="btn btn-primary" type="button">
                                <i class="fas fa-search"></i> Buscar
                            </button>-->
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 ">
                    <div class="text-center">
                    <button title="Agregar" type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddModal">
                        <i class="fas fa-plus"></i> Agregar Nuevo Producto
                    </button>
                </div>
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
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                    <th>Categoria</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
                                    <th>Devuelto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($res)) :
                                ?>
                                    <tr>
                                        <td><?php echo $row['id_productos'] ?></td>
                                        <td><?php echo $row['nombres'] ?></td>
                                        <td><?php echo $row['cantidad'] ?></td>
                                        <td><?php echo $row['categoria'] ?></td>
                                        <td><?php echo $row['precio'] ?></td>
                                        <td><?php echo $row['stock'] ?></td>
                                        <td><?php echo $row['devuelto'] ?></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a title="Modificar Producto" data-toggle="modal" data-target="#EditModal" href="javascript:void(0);" onclick="document.getElementById('id_productos').value = <?= $row['id_productos'] ?>;document.getElementById('nombres').value = '<?= $row['nombres'] ?>';document.getElementById('cantidad').value = '<?= $row['cantidad'] ?>';document.getElementById('categoria').value = '<?= $row['categoria'] ?>'; document.getElementById('precio').value = '<?= $row['precio'] ?>'; document.getElementById('stock').value = '<?= $row['stock'] ?>'; document.getElementById('devuelto').value = '<?= $row['devuelto'] ?>';" class="btn btn-success btn-sm">
                                                        <i class="fas fa-edit"></i> 
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a title="Eliminar Producto" data-toggle="modal" data-target="#DeleteModal" href="javascript:void(0);" onclick="document.getElementById('delete_id').value = <?= $row['id_productos'] ?>;document.getElementById('delete_nombre').innerHTML = '<?= $row['nombres'] ?>';" class="btn btn-danger btn-sm borrar">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                                <script>
                                    document.getElementById('searchProduct').addEventListener('keyup', function() {
                                        var input, filter, table, tr, td, i, txtValue;
                                        input = document.getElementById('searchProduct');
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
                <h4 class="modal-title" id="defaultModalLabel">Registrar producto</h4>
            </div>
            <div class="modal-body">
                <form action="panel.php?modulo=productos" id="ingresar" method="POST">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="add_nombres" id="add_nombres" class="form-control" placeholder="Nombres del producto" onkeypress="return validarTexto(event)" required>
                    </div>
                    <div class="form-group">
                        <label>Cantidad</label>
                        <input type="number" name="add_cantidad" id="add_cantidad" class="form-control" placeholder="Cantidad" required>
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <select type="option" name="add_categoria" id="add_categoria" class="form-control"  required>
                            <option value="Accesorios">Accesorios</option>
                            <option value="Repuestos">Repuestos</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number" name="add_precio" id="add_precio" class="form-control" placeholder="Precio" required>
                    </div>
                    <div class="form-group">
                        <label>Stock</label>
                        <input type="number" name="add_stock" id="add_stock" class="form-control" placeholder="Stock" required>
                    </div>
                    <div class="form-group">
                        <label>Devuelto</label>
                        <input type="number" name="add_devuelto" id="add_devuelto" class="form-control" required>
                    </div>
                    <input type="submit" name="ingresar_productos" Value="Registrar" class="btn btn-primary">

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
                <h4 class="modal-title" id="defaultModalLabel">Editar Producto</h4>
            </div>
            <div class="modal-body">

                <form action="panel.php?modulo=productos" method="POST">
                    <input type="hidden" name="id_productos" id="id_productos" value="">

                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombres" id="nombres" class="form-control" onkeypress="return validarTexto(event)" required>
                    </div>
                    <div class="form-group">
                        <label>Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" class="form-control" onkeypress="return validarNumero(event)" required>
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <select type="option" name="categoria" id="categoria" class="form-control" required>
                            <option value="Accesorios">Accesorios</option>
                            <option value="Repuestos">Repuestos</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number" name="precio" id="precio" class="form-control"required>
                    </div>
                    <div class="form-group">
                        <label>Stock</label>
                        <input type="number" name="stock" id="stock" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Devuelto</label>
                        <input type="number" name="devuelto" id="devuelto" class="form-control" required>
                    </div>

                    <input type="submit" name="modificar_productos" id="modificar_productos" Value="Actualizar" class="btn btn-success">

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
                <h4 class="modal-title" id="defaultModalLabel">Eliminar Producto</h4>
            </div>
            <div class="modal-body">

                <form action="panel.php?modulo=productos" method="POST">
                    <input type="hidden" name="delete_id" id="delete_id" value="">

                    <strong>
                        <p id="delete_nombre"></p>
                    </strong></label>


                    <div class="form-group">
                        <label class="mr-sm-2">¿Deseas eliminar este producto?</label>
                    </div>

                    <input type="submit" name="eliminar_productos" id="eliminar_productos" Value="Eliminar" class="btn btn-danger">

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>