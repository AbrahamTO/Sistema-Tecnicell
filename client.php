<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <title>Clientes</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!----css3---->
  <link rel="stylesheet" href="css/custom.css" />

  <!--google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <!--google icon-->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet" />
</head>

<body>
  <div class="wrapper">
    <div class="body-overlay"></div>

    <!-- Sidebar  -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3>
          <span>TecnicellPlus</span>
        </h3>
      </div>
      <ul class="list-unstyled components">
        <li class="active">
          <a href="#" class="principal"><i class="material-icons">dashboard</i><span>Principal</span></a>
        </li>
        <li class="">
          <a href="#" class="client"><i class="material-icons">person</i><span>Clientes</span></a>
        </li>

        <li class="">
          <a href="#" class="client"><i class="material-icons">archive</i><span>Productos</span></a>
        </li>
      </ul>
    </nav>

    <!--------page-content---------------->

    <div id="content">
      <!--top--navbar----design--------->

      <div class="top-navbar">
        <div class="xp-topbar">
          <div class="row">
            <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
              <div class="xp-menubar">
                <span class="material-icons text-white">signal_cellular_alt</span>
              </div>
            </div>
            <!-- End XP Col -->

            <!-- Start XP Col -->
            <div class="col-md-5 col-lg-3 order-3 order-md-2">
              <div class="xp-searchbar">
                <form>
                  <div class="input-group">
                    <input type="search" class="form-control" placeholder="Buscar" />
                    <div class="input-group-append">
                      <button class="btn" type="submit" id="button-addon2">
                        GO
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End XP Col -->

            <!-- Start XP Col -->
            <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
              <div class="xp-profilebar text-right">
                <nav class="navbar p-0">
                  <ul class="nav navbar-nav flex-row ml-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="#" data-toggle="dropdown">
                        <img src="img/user.jpg" style="width: 40px; border-radius: 50%" />
                        <span class="xp-user-live"></span>
                      </a>
                      <ul class="dropdown-menu small-menu">
                        <li>
                          <a href="#"><span class="material-icons">logout</span>Cerrar
                            sesión</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- End XP Col -->
          </div>
          <!-- End XP Row -->
        </div>
        <div class="xp-breadcrumbbar text-center">
          <h4 class="page-title">Clientes</h4>
        </div>
      </div>

      <!--------Parte del crud------------->

      <div class="main-content">
        <div class="row">
          <div class="col-md-12">
            <div class="table-wrapper">
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
                    <h2 class="ml-lg-2">Administra clientes</h2>
                  </div>
                  <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                      <i class="material-icons">&#xE147;</i>
                      <span>Crear nuevo cliente</span></a>
                    <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
                      <i class="material-icons">&#xE15C;</i>
                      <span>Borrar cliente</span></a>
                  </div>
                </div>
              </div>
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>
                      <span class="custom-checkbox">
                        <input type="checkbox" id="selectAll" />
                        <label for="selectAll"></label>
                      </span>
                    </th>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Equipo</th>
                    <th>Detalles</th>
                    <th>Fecha de registro</th>
                    <th>Fecha de recojo</th>
                    <th>Estado</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include "model/conexion.php";
                  $sql = $conexion->query("select * from cliente");
                  while ($datos = $sql->fetch_object()) { ?>
                    <tr>
                      <td>
                        <span class="custom-checkbox">
                          <input type="checkbox" id="checkbox1" name="options[]" value="1" />
                          <label for="checkbox1"></label>
                        </span>
                      </td>
                      <td><?= $datos->id_cliente?></td>
                      <td><?= $datos->nombres?></td>
                      <td><?= $datos->equipo?></td>
                      <td><?= $datos->detalles?></td>
                      <td><?= $datos->fecha_registro?></td>
                      <td><?= $datos->fecha_recojo?></td>
                      <td><?= $datos->estado?></td>
                      <td>
                        <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                          <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                          <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                      </td>
                    </tr>
                  <?php }
                  ?>
                  <tr>
                    <td>
                      <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="options[]" value="1" />
                        <label for="checkbox1"></label>
                      </span>
                    </td>
                    <td>Thomas Hardy</td>
                    <td>thomashardy@mail.com</td>
                    <td>89 Chiaroscuro Rd, Portland, USA</td>
                    <td>(171) 555-2222</td>
                    <td>17/02/2022</td>
                    <td>17/02/2022</td>
                    <td>
                      <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                      <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox2" name="options[]" value="1" />
                        <label for="checkbox2"></label>
                      </span>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                      <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox3" name="options[]" value="1" />
                        <label for="checkbox3"></label>
                      </span>
                    </td>
                    <td>Maria Anders</td>
                    <td>mariaanders@mail.com</td>
                    <td>25, rue Lauriston, Paris, France</td>
                    <td>(503) 555-9931</td>
                    <td>
                      <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                      <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox4" name="options[]" value="1" />
                        <label for="checkbox4"></label>
                      </span>
                    </td>
                    <td>Fran Wilson</td>
                    <td>franwilson@mail.com</td>
                    <td>C/ Araquil, 67, Madrid, Spain</td>
                    <td>(204) 619-5731</td>
                    <td>
                      <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                      <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox5" name="options[]" value="1" />
                        <label for="checkbox5"></label>
                      </span>
                    </td>
                    <td>Martin Blank</td>
                    <td>martinblank@mail.com</td>
                    <td>Via Monte Bianco 34, Turin, Italy</td>
                    <td>(480) 631-2097</td>
                    <td>
                      <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                      <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="clearfix">
                <div class="hint-text">
                  Mostrando <b>5</b> de <b>25</b> registros
                </div>
                <ul class="pagination">
                  <li class="page-item disabled"><a href="#">Previo</a></li>
                  <li class="page-item">
                    <a href="#" class="page-link">1</a>
                  </li>
                  <li class="page-item">
                    <a href="#" class="page-link">2</a>
                  </li>
                  <li class="page-item active">
                    <a href="#" class="page-link">3</a>
                  </li>
                  <li class="page-item">
                    <a href="#" class="page-link">4</a>
                  </li>
                  <li class="page-item">
                    <a href="#" class="page-link">5</a>
                  </li>
                  <li class="page-item">
                    <a href="#" class="page-link">Siguiente</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Edit Modal HTML -->
          <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form method="POST">
                  <div class="modal-header">
                    <h4 class="modal-title">Añadir cliente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      &times;
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Nombres</label>
                      <input type="text" class="form-control" name="nombre" required />
                    </div>
                    <div class="form-group">
                      <label>Equipo</label>
                      <input type="text" class="form-control" name="equipo"required />
                    </div>
                    <div class="form-group">
                      <label>Detalles</label>
                      <textarea class="form-control" name="detalle"required></textarea>
                    </div>
                    <div class="form-group">
                      <label>Número</label>
                      <input type="number" class="form-control" name="numero" required/>
                    </div>
                    <div class="form-group">
                      <label>Fecha de registro</label> 
                      <input type="date" class="form-control" name="fecha_reg"required />
                    </div>
                    <div class="form-group">
                      <label>Estado</label>
                      <select type="option" class="form-control" name="estado" required>
                        <option value="pendiente">Pendiente</option>
                        <option value="finalizado">Finalizado</option>
                      </select>
                    </div>
                    <?php
                    include "model/conexion.php";
                    include "controller/registro_cliente.php";
                    ?>
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" />
                    <input type="submit" class="btn btn-success" name="btnAdd" value="Añadir" />
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Edit Modal HTML -->
          <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <h4 class="modal-title">Editar cliente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      &times;
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Nombres</label>
                      <input type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label>Equipo</label>
                      <input type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label>Detalles</label>
                      <textarea class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                      <label>Fecha de registro</label>
                      <input type="date" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label>Fecha de recojo</label>
                      <input type="date" class="form-control" />
                    </div>
                    <div class="form-group">
                      <label>Estado</label>
                      <select type="option" class="form-control" required>
                        <option value="pendiente">Pendiente</option>
                        <option value="finalizado">Finalizado</option>
                      </select>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" />
                    <input type="submit" class="btn btn-success" value="Actualizar" />
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Delete Modal HTML -->
          <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <h4 class="modal-title">Borrar cliente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      &times;
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Seguro de que quiere borrar este registro?</p>
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" />
                    <input type="submit" class="btn btn-danger" value="Borrar" />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!---footer---->
      </div>

      <footer class="footer">
        <div class="container-fluid">
          <div class="footer-in">
            <p class="mb-0">
              Todos los derechos reservados-2023
            </p>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!----------html code compleate----------->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $(".xp-menubar").on("click", function() {
        $("#sidebar").toggleClass("active");
        $("#content").toggleClass("active");
      });

      $(".xp-menubar,.body-overlay").on("click", function() {
        $("#sidebar,.body-overlay").toggleClass("show-nav");
      });
    });
  </script>
</body>

</html>