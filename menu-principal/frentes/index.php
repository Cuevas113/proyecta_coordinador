<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
        <meta name="author" content="" />
        <title>Contratos | Coordinador</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../css/styles.css" rel="stylesheet" />
        <link href="../../css/logo_empresa.css" rel="stylesheet" />
        <link rel="stylesheet" href="../../css/style-general.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper" >
            <!-- Sidebar-->
            <div class="border-end" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom navbar-titulo"> <i class="bi bi-person-lines-fill"></i> Coordinador</div>
                <br>
                <h3 class="m-2">Altas</h3>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 fs-5 navbar-botones" href="../contratos/"><i class="bi bi-clipboard2"></i> Contratos</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 fs-5 navbar-botones navbar" href=""><i class="bi bi-grid-1x2"></i> Frentes</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 fs-5 navbar-botones" href="../paramédicos/" ><i class="bi bi-person-badge"></i> Paramédicos</a>
                </div>
                <br>
                <h3 class="m-2">Asignaciones</h3>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 fs-5 navbar-botones" href="../asignar-frentes/"><i class="bi bi-person-lines-fill"></i> Frentes</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 fs-5 navbar-botones" href="#!" ><i class="bi bi-cup-straw"></i> Alcohol</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 fs-5 navbar-botones" href="#!" ><i class="bi bi-eyedropper"></i> Antidoping</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 fs-5 navbar-botones" href="#!" ><i class="bi bi-clipboard2-fill"></i> Luxometria</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper" class="cuerpo">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light border-bottom">
                    <div class="container-fluid">

                        <a href="" class="navbar-brand"> <img src="..\..\archivos\sistema\bimo.png" id="logo_empresa"> <img src="..\..\archivos\sistema\hnsg.jpg" id="logo_empresa"> </a>
                        <button class="navbar-toggler" style="background-color:#F2F3F4; border-color:#797D7F;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0" id="navbar-suerior">
                              <li>
                                <a class="btn" id="sidebarToggle">
                                  <div id="iconsiderbar" class="">
                                    <i class="bi bi-arrow-bar-left"></i>Navegación
                                  </div>
                                </a>
                              </li>
                                <li class="nav-item active"><a class="nav-link text-blanco" href="#!">Adminitración</a></li>
                                <li class="nav-item"><a class="nav-link text-blanco" href="#!">Salir <i class="bi bi-box-arrow-right"></i></a></li>
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- Page content-->
                <div class="container-fluid">
                    <div class="row">
                      <div class="col-12 col-xl-4 fs-5">
                        <h4 class="m-3">Frentes</h4>
                        <form class="row m-2">
                          <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="hidden" name="" value="" id="frenteID" value="nuevo">
                            <label for="nombreFrente" class="form-label">Nombre de frente</label>
                            <input type="text" class="form-control input-color" id="nombreFrente" name="nombreFrente" autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();">
                          </div>

                          <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                            <label for="frenteObrero" class="form-label">Obrero</label>
                            <select class="form-select input-color" name="frenteObrero" id="frenteObrero">
                                <option value="">Supervisor...</option>
                                <option value="1">Supervisor 1...</opcion>
                                <option value="2">Supervisor 2...</opcion>
                                <option value="3">Supervisor 3...</opcion>
                            </select>
                          </div>
                          <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                            <label for="frenteSeguridad" class="form-label">Seguridad</label>
                            <select class="form-select input-color" name="frenteSeguridad" id="frenteSeguridad">
                                <option value="">Supervisor...</option>
                                <option value="1">Supervisor 1...</opcion>
                                <option value="2">Supervisor 2...</opcion>
                                <option value="3">Supervisor 3...</opcion>
                            </select>
                          </div>

                          <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                            <label for="frenteParamedico" class="form-label">Paramédico</label>
                            <select class="form-select input-color" name="frenteParamedico" id="frenteParamedico">
                                <option value="">Seleccione...</option>
                                <option value="1">Paramédico 1...</opcion>
                                <option value="2">Paramédico 2...</opcion>
                                <option value="3">Paramédico 3...</opcion>
                            </select>
                          </div>
                          <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                            <label for="frenteTurno" class="form-label">Turno</label>
                            <input type="text" class="form-control input-color" id="frenteTurno" name="frenteTurno" placeholder="" autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();">
                          </div>
                          <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                            <label for="frenteUbicacion" class="form-label">Ubicación</label>
                            <input type="text" class="form-control input-color" id="frenteUbicacion" name="frenteUbicacion" placeholder="" autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();">
                          </div>
                          <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                            <label for="frentePredio" class="form-label">Predio</label>
                            <input type="text" class="form-control input-color" id="frentePredio" name="frentePredio" placeholder="" autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();">
                          </div>
                          <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="frenteComentario" class="form-label">Comentario</label>
                            <textarea name="frenteComentario" rows="" cols="" class="form-control input-color" id="frenteComentario"></textarea>
                          </div>
                          <div class="col-12 m-2 text-center">
                            <button type="button" class="btn button-form" id="guardarFrente"> <i class="bi bi-send"></i> Guardar frente</button>
                          </div>
                        </form>
                      </div>
                      <div class="col-12 col-xl-8">
                        <h4 class="m-3">Frentes Disponibles</h4>
                        <div class="table-responsive">

                          <table class="table table-hover table-striped" id="tableContenido">
                            <thead class="titulo-tabla">
                              <tr>
                                <th scope="col d-flex justify-content-center" id="columnaNum">#</th>
                                <th scope="col d-flex justify-content-center" class="columnaAcc">Acciones</th>
                                <th scope="col d-flex justify-content-center">Frente</th>
                                <th scope="col d-flex justify-content-center">Supervisor Obra</th>
                                <th scope="col d-flex justify-content-center">Supervisor Seguridad</th>
                                <th scope="col d-flex justify-content-center">Paramédico</th>
                                <th scope="col d-flex justify-content-center">Turno</th>
                                <th scope="col d-flex justify-content-center" id="columnaAct">Activo</th>
                              </tr>
                            </thead>
                            <tbody class="">
                              <tr >
                                <th scope="row">1</th>
                                <th scope="row"></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th scope="row">En proceso</th>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <th scope="row"></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th scope="row">En proceso</th>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <th scope="row"></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th scope="row">En proceso</th>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="..\..\js\framework\jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="..\..\js\framework\jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
        <!-- Core theme JS-->
        <script src="../../js/scripts.js"></script>
        <script type="text/javascript" src="js/table.js"></script>
        <script type="text/javascript" src="js/registrar_guardar.js"></script>
        <script type="text/javascript" src="../../js/funciones.js"></script>
        <style>

        </style>
    </body>
</html>
