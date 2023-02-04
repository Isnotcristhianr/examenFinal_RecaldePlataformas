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

<div  style="position: static; align-items: center; align-content: center; text-align: center; margin: 50px;">
    <video class="rounded" width="750" autoplay muted loop>
        <source src="/pacientes/assets/imgs/production ID_4487122.mp4" type="video/mp4">
    </video>
</div>

<!--Informacion-->
<div class="container text-center text-light">
   <!--Botones-->
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h2>¿Qué deseas hacer?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a id="btn" href="http://localhost/examenfinal_recalde/pacientes/index.php/pacientes" class="btn btn-primary">Ver Pacientes</a>
                    <a id="btn" href="/pacientes/imc" class="btn btn-primary">Controlar IMC</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<?php
    echo $pie;
?>