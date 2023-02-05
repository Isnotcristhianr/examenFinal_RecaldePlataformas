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

<!--Formulario para asignar IMC-->
<section >
    <div class="text-center p-3 m-5 " style="display: flex; align-items: center; justify-content: center;">
        <div style="display: flex; align-items: center; justify-content: center;">
            <div class="forms-box mb-4 mt-5 bg-dark p-5 rounded text-light">
                <h2 class="mb-4 text-center text-ligth">Asignar IMC</h2>
                <form action="http://localhost/examenfinal_recalde/pacientes/index.php/actualizarPaciente" method="POST">
                    <input type="text" id="id" name="id" hidden value="<?php echo $id ?>">
                    <div class="user-box">
                        <label for="pac_nombre">Nombre: </label>
                        <input type="text" class="input-group mb-3" name="nombre" id="nombre" value="<?php echo $nombre ?>" require>
                    </div>
                    <div class="user-box">
                        <label for="pac_dni">DNI: </label>
                        <input type="text" class="input-group mb-3" name="dni" id="dni" value="<?php echo $dni ?>" require>
                    </div>
                    <div class="user-box">
                        <label for="pac_altura">Altura: </label>
                        <input type="text" class="input-group mb-3" name="altura" id="altura" value="<?php echo $altura ?>" require placeholder="cm">
                    </div>
                    <div class="user-box">
                        <label for="pac_peso">Peso: </label>
                        <input type="text" class="input-group mb-3" name="peso" id="peso" value="<?php echo $peso ?>" require placeholder="kg">
                    </div>
                    <div class="user-box">
                        <label for="pac_imc">IMC: </label>
                        <input type="text" class="input-group mb-3" name="imc" id="imc" value="<?php echo $imc ?>" require>
                    </div>
                    <div class="user-box">
                        <label for="pac_resultado">Resultado: </label>
                        <input type="text" class="input-group mb-3" name="resultado" id="resultado" value="<?php echo $resultado ?>" require>
                    </div>

                    <button class="btn btn-primary">Actualizar</button>
                    <a href="http://localhost/examenfinal_recalde/pacientes/index.php/pacientes" class="btn btn-danger">Atras</a>
                </form>
            </div>
        </div>
    </div>
</section>

<!--JS-->
<script>
   const altura = document.getElementById('altura');
   const peso = document.getElementById('peso');

   peso.addEventListener('change', (event)=>{
         const alturaMetros = altura.value / 100;
         const imc = peso.value / (alturaMetros * alturaMetros);
         //envio imc
         document.getElementById('imc').value = imc.toFixed(2);
            //envio resultado
            if(imc < 18.5){
                document.getElementById('resultado').value = "Bajo peso";
            }else if(imc >= 18.5 && imc <= 24.9){
                document.getElementById('resultado').value = "Normal";
            }else if(imc >= 25 && imc <= 29.9){
                document.getElementById('resultado').value = "Sobrepeso";
            }else if(imc >= 30 && imc <= 34.9){
                document.getElementById('resultado').value = "Obesidad grado 1";
            }else if(imc >= 35 && imc <= 39.9){
                document.getElementById('resultado').value = "Obesidad grado 2";
            }else if(imc >= 40){
                document.getElementById('resultado').value = "Obesidad grado 3";
            }

    });

</script>
<?php
echo $pie;
?>