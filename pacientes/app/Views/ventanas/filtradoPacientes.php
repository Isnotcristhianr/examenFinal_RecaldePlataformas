<?php
echo $cabecera;
?>
<br>

<div class="container md-6 text-center card">
    <h3>Resultados IMC</h3>
    <br>

    <?php
    $array = json_decode((file_get_contents('http://localhost/examenfinal_recalde/api/servicios/apiPacientes.php')), true);

    /* Filtrar y segmentar por clasificacion de imc */
    //bajo peso
    echo "<h3>Bajo peso</h3>";
    foreach ($array as $key => $value) {
        if ($value['resultado'] == 'Bajo peso') {
            //motrar
            echo "<p><b>Nombre: </b>" . $value['nombre']."<b> IMC: </b>".$value['imc']."</p>";
        }
    }
    echo "<br>";
    //normal
    echo "<h3>Normal</h3>";
    foreach ($array as $key => $value) {
        if ($value['resultado'] == 'Normal') {
            //motrar
            echo "<p><b>Nombre: </b>" . $value['nombre']."<b> IMC: </b>".$value['imc']."</p>";
        }
    }
    echo "<br>";
    //sobrepeso
    echo "<h3>Sobrepeso</h3>";
    foreach ($array as $key => $value) {
        if ($value['resultado'] == 'Sobrepeso') {
            //motrar
            echo "<p><b>Nombre: </b>" . $value['nombre']."<b> IMC: </b>".$value['imc']."</p>";
        }
    }
    echo "<br>";
    //obesidad
    echo "<h3>Obesidad grado 1</h3>";
    foreach ($array as $key => $value) {
        if ($value['resultado'] == 'Obesidad grado 1') {
            //motrar
            echo "<p><b>Nombre: </b>" . $value['nombre']."<b> IMC: </b>".$value['imc']."</p>";
        }
    }
    echo "<br>";
    //obesidad
    echo "<h3>Obesidad grado 2</h3>";
    foreach ($array as $key => $value) {
        if ($value['resultado'] == 'Obesidad grado 2') {
            //motrar
            echo "<p><b>Nombre: </b>" . $value['nombre']."<b> IMC: </b>".$value['imc']."</p>";
        }
    }   
    echo "<br>";
    //obesidad
    echo "<h3>Obesidad grado 3</h3>";
    foreach ($array as $key => $value) {
        if ($value['resultado'] == 'Obesidad grado 3') {
            //motrar
            echo "<p><b>Nombre: </b>" . $value['nombre']."<b> IMC: </b>".$value['imc']."</p>";
        }
    }


    ?>

</div>

<br>
<?php
echo $pie;
?>