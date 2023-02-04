<?php
    echo $cabecera;
?>

<div class="container md-12">

<!--Listar pacientes api-->
<div class="row">
    <div class="col-md-12">
        <div class="card bg-secondary text-light">
            <div class="card-header">
                <h3 class="card-title">Listado de Pacientes Regsitrados</h3>
            </div>
            <div class="card-body">
                <table  id="tblPacientes" class="table table-bordered table-striped table-dark">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Dni</th>
                            <th>Altura</th>
                            <th>Peso</th>
                            <th>IMC</th>
                            <th>Resultado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="listadoPacientes">
                        <!--Aqui se cargan los pacientes-->
                        
                        <?php 
                            $array = json_decode((file_get_contents('http://localhost/examenfinal_recalde/api/servicios/apiPacientes.php')), true);

                            foreach ($array as $key => $value) {
                                echo "<tr>";
                                echo "<td>".$value['nombre']."</td>";
                                echo "<td>".$value['dni']."</td>";
                                echo "<td>".$value['altura']."</td>";
                                echo "<td>".$value['peso']."</td>";
                                echo "<td>".$value['imc']."</td>";
                                echo "<td>".$value['resultado']."</td>";
                                echo "<td>
                                <a href='http://localhost/examenfinal_recalde/pacientes/eliminar/".$value['id']."' class='btn btn-success'>👀</a>
                                <a href='http://localhost/examenfinal_recalde/pacientes/editar/".$value['id']."' class='btn btn-warning'>🖊</a> 
                                <a href='http://localhost/examenfinal_recalde/pacientes/eliminar/".$value['id']."' class='btn btn-danger'>🗑</a>
                                </td>";
                                echo "</tr>";
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>

<br>
<?php
    echo $pie;
?>