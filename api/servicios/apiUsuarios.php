<?php
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json charset=utf8');
    
    $varMetodo=$_SERVER['REQUEST_METHOD'];

    include '../modelo/usuarios.php';
    $objEstudiante=new usuarios();

    //echo($varMetodo); para ver el tipo de peticion que el cliente pida
    //switchcase es el mas usado
    switch($varMetodo){
        case 'GET':
            //si es get consultar y mostrar los datos del estudiante
            //para determinar el id y acorde a eso ejecutar el select
            if(isset($_GET['idUsuario'])){
                
                $id=$_GET['idUsuario'];
                $datos=$objEstudiante->select1Est($id);
                $numTotal=$datos->rowCount();

            }else{

                $datos=$objEstudiante->selectEst();
                $numTotal=$datos->rowCount();
            }

            if($numTotal>0){
                //se crea un array para guardar la info y luego transformar a json
                $vectorEstudiante=array();

                while($fila=$datos->fetch(PDO::FETCH_ASSOC)){
                    extract($fila);

                    $item=array(
                        "idUsuario" => $fila["idUsuario"],
                        "usuario"=> $fila["usuario"],
                        "contraseña"=> $fila["contraseña"],
                        "rol"=> $fila["rol"],
                    );
                    array_push($vectorEstudiante, $item);
                }
                //trasnformamos a json
                echo json_encode($vectorEstudiante);
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