<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
    <!--BOOSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <!--DataTables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
    <!--Icono Navegador-->
    <link rel="icon" href="../assets/imgs/doctor.png">
</head>

<body>

    <!--header-->
    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://localhost/examenfinal_recalde/pacientes/index.php/inicio"> <img src="../assets/imgs/doctor.png" style="height: 30px;">
                    SanaSana</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <img src="../assets/imgs/doctor.png" style="height: 30px;">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>

                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="http://localhost/examenfinal_recalde/pacientes/index.php/inicio">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/examenfinal_recalde/pacientes/index.php/pacientes">Pacientes</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Consultorio
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="http://localhost/examenfinal_recalde/pacientes/index.php/pacientes">Ver Pacientes</a></li>
                                    <li><a class="dropdown-item" href="#">Calcular IMC</a></li>
                                    <li><a class="dropdown-item" href="http://localhost/examenfinal_recalde/pacientes/index.php/asignarImc">Asignar IMC</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="http://localhost/examenfinal_recalde/pacientes/index.php/filtradoPacientes">Filtrado</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div style="margin-bottom: 80px;"></div>
    <!--Contenido-->

