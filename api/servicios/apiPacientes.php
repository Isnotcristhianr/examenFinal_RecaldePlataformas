<?php
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json charset=utf8');
    
    $varMetodo=$_SERVER['REQUEST_METHOD'];

    include '../modelo/pacientes.php';
    $objPaciente=new pacientes();

    //echo($varMetodo); para ver el tipo de peticion que el cliente pida
    //switchcase es el mas usado
    switch($varMetodo){
        case 'GET':
            //si es get consultar y mostrar los datos del estudiante
            //para determinar el id y acorde a eso ejecutar el select
            if(isset($_GET['pac_id'])){
                    
                    $id=$_GET['pac_id'];
                    $datos=$objPaciente->selectPacientesId($id);
                    $numTotal=$datos->rowCount();
                    
                
               

            }else{

                $datos=$objPaciente->selectPacientes();
                $numTotal=$datos->rowCount();
            }

            if($numTotal>0){
                //se crea un array para guardar la info y luego transformar a json
                $vectorPacientes=array();

                while($fila=$datos->fetch(PDO::FETCH_ASSOC)){
                    extract($fila);

                    $item=array(
                        "id" => $fila["pac_id"],
                        "nombre"=> $fila["pac_nombre"],
                        "dni"=> $fila["pac_dni"],
                        "altura"=> $fila["pac_altura"],
                        "peso"=> $fila["pac_peso"],
                        "imc"=> $fila["pac_imc"]
                    );
                    array_push($vectorPacientes, $item);
                }
                //trasnformamos a json
                echo json_encode($vectorPacientes, JSON_PRETTY_PRINT);
            }else{
                echo("No hay registro");
            }

            break;
    
        case 'POST':
            //insertar elementos a la tabla estudiante
            
            
            break;
        
        case 'PUT':
            //actualizar la info del estudiante
            
            break;

        case 'DELETE':
            //eliminar al estudiante

            break;
        
        default:
            echo('Opcion no valida');
            break;
    }
?>