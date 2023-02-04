<?php
echo $cabecera;
?>
<br>

<!--Lista de pacientes para asignar IMC-->
<section>
    <div class="text-center p-3 m-5" style="display: flex; align-items: center; justify-content: center;">
        <div style="display: flex; align-items: center; justify-content: center;">
            <div class="forms-box mb-4 mt-5">
                <h2 class="mb-4 text-center text-ligth">Asignar IMC</h2>
                <!--DropdownList de los pacientes-->
                <form action="<?= base_url('actualizar') ?>" method="POST">
                    <div class="user-box">
                        <label for="pac_nombre">Paciente: </label>
                        <select class="form-select" aria-label="Default select example" name="nombre" id="nombre">
                            <option selected>Seleccionar</option>
                            <?php
                            $datos = json_decode((file_get_contents('http://localhost/examenfinal_recalde/api/servicios/apiPacientes.php')), true);
                            ?>

                            <?php foreach ($datos as $dato) : ?>
                                <option value="<?php echo $dato['id'] ?>"><?php echo $dato['nombre'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="user-box">
                        <label for="pac_altura">Altura: </label>
                        <input type="text" class="form-control input-group mb-3" name="altura" id="altura">
                    </div>
                    <div class="user-box">
                        <label for="pac_peso">Peso: </label>
                        <input type="text" class="form-control input-group mb-3" name="peso" id="peso">
                    </div>
                    <div class="user-box">
                        <label for="pac_imc">IMC: </label>
                        <input type="text" class="form-control input-group mb-3" name="imc" id="imc">
                    </div>
                    <div class="user-box">
                        <label for="pac_resultado">Resultado: </label>
                        <input type="text" class="form-control input-group mb-3" name="resultado" id="resultado">
                    </div>

                    <button type="submit" class="btn btn-primary">Confirmar</button>
                    <a href="http://localhost/examenfinal_recalde/pacientes/index.php/pacientes" class="btn btn-danger">Atras</a>
                </form>
            </div>
        </div>
    </div>
</section>

<!--Script para calcular el IMC-->
<script>
if(document.getElementById("nombre").value != "Seleccionar"){
    
    if(document.getElementById("altura").onchange == true && document.getElementById("peso").onchange == true){
        var altura = document.getElementById("altura").value;
        var peso = document.getElementById("peso").value;

        var imc = peso / (altura * altura);

        document.getElementById("imc").value = imc;
    }
}
   
</script>

<?php
echo $pie;
?>