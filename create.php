<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="view/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    
    <section class="h-100 h-custom gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">

                                <div class="col-lg-6 bg-indigo text-white">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-5">Detalles de cliente</h3>

                                        <div class="mb-4 pb-2">
                                            <div class="form-outline form-white">
                                                <input type="text" name="name" class="form-control form-control-lg" placeholder="Ingrese un nombre y un apellido"/>
                                                <label class="form-label" for="form3Examplea2">Nombres</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 pb-2">
                                            <div class="form-outline form-white">
                                                <input type="text" name="form3Examplea3" class="form-control form-control-lg" placeholder="Modelo del dispositivo"/>
                                                <label class="form-label" for="form3Examplea3">Equipo</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="mb-4 pb-2">

                                                <div class="form-outline form-white">
                                                    <input type="text" name="form3Examplea4" class="form-control form-control-lg" placeholder="Detalles del dispositivo" />
                                                    <label class="form-label" for="form3Examplea4">Detalles</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5 mb-4 pb-2">

                                                <div class="form-outline form-white">
                                                    <input type="date" name="form3Examplea7" class="form-control form-control-lg"/>
                                                    <label class="form-label" for="form3Examplea7">Fecha de registro</label>
                                                </div>

                                            </div>
                                            <div class="col-md-7 mb-4 pb-2">

                                                <div class="form-outline form-white">
                                                    <input type="date" name="form3Examplea8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplea8">Fecha de entrega</label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <div class="form-outline form-white">
                                                <select name="estate" class="form-control form-control-lg">
                                                    <option value="value1">Pendiente</option>
                                                    <option value="value1">En ejecución</option>
                                                    <option value="value1">Finalizado</option>
                                                    <option value="value1">Entregado</option>
                                                </select>
                                                <label class="form-label" for="form3Examplea9">Estado</label>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Guardar cliente</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>