<?php
echo $cabecera;
?>

<?php
$id = $datos[0]['pac_id'];
$nombre = $datos[0]['pac_nombre'];
$dni = $datos[0]['pac_dni'];
$altura = $datos[0]['pac_altura'];
$peso = $datos[0]['pac_peso'];
$imc = $datos[0]['pac_imc'];
$resultado = $datos[0]['pac_resultado'];
?>
<br>

<!--Formulario para asignar IMC-->
<section>
    <div class="text-center p-3 m-5" style="display: flex; align-items: center; justify-content: center;">
        <div style="display: flex; align-items: center; justify-content: center;">
            <div class="forms-box mb-4 mt-5">
                <h2 class="mb-4 text-center text-ligth">Asignar IMC</h2>
                <form action="" method="POST">
                    <input type="text" id="id" name="id" hidden value="<?php echo $id ?>">
                    <div class="user-box">
                        <label for="pac_nombre">Nombre: </label>
                        <input type="text" class="input-group mb-3" name="nombre" id="nombre" value="<?php echo $nombre ?>">
                    </div>
                    <div class="user-box">
                        <label for="pac_dni">DNI: </label>
                        <input type="text" class="input-group mb-3" name="dni" id="dni" value="<?php echo $dni ?>">
                    </div>
                    <div class="user-box">
                        <label for="pac_altura">Altura: </label>
                        <input type="text" class="input-group mb-3" name="altura" id="altura" value="<?php echo $altura ?>">
                    </div>
                    <div class="user-box">
                        <label for="pac_peso">Peso: </label>
                        <input type="text" class="input-group mb-3" name="peso" id="peso" value="<?php echo $peso ?>">
                    </div>
                    <div class="user-box">
                        <label for="pac_imc">IMC: </label>
                        <input type="text" class="input-group mb-3" name="imc" id="imc" value="<?php echo $imc ?>">
                    </div>
                    <div class="user-box">
                        <label for="pac_resultado">Resultado: </label>
                        <input type="text" class="input-group mb-3" name="resultado" id="resultado" value="<?php echo $resultado ?>">
                    </div>
                    
                    <button class="btn btn-primary">Actualizar</button>
                    <a href="<?= base_url('/ListarLibros') ?>" class="btn btn-danger">Atras</a>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
echo $pie;
?>