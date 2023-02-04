<?php
    echo $cabecera;
?>
<br>

<div class="text-center text-light">
    <div class="row">
        <div class="col-12">
            <h1>Bienvenido a SanaSana</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>Control de Pacientes e IMC</p>
        </div>
    </div>
</div>

<div  >
    <video width="750" autoplay muted loop>
        <source src="/pacientes/assets/imgs/production ID_4487122.mp4" type="video/mp4">
    </video>
</div>

<!--Mini menu-->
<!-- informacion  -->
<div class="container text-dark">
    <div class="row p-2">
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Api</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="<?= base_url('/api') ?>" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Libros</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="<?= base_url('/ListarLibros') ?>" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Estudiantes</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="<?= base_url('/VerEstudiantes') ?>" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Relaciones</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="<?= base_url('/relaciones') ?>" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    echo $pie;
?>