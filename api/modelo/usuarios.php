<?php
    include '../modelo/conexion.php';

    class usuarios{

        private $con="";

        public function __construct(){
            
            $obj=new coneccion();
            $this->con=$obj->getConeccion();

        }

        public function selectEst(){
            
            $query = "SELECT *FROM usuarios;";
            $resultado=$this->con->prepare($query);
            $resultado->execute();

            return $resultado;
        }

        public function select1est($id){
            
            $this->idUsuario = $id;
            
            $query = "SELECT *FROM usuarios WHERE idUsuario='".$id."';";
            $resultado=$this->con->prepare($query);
            $resultado->execute();

            return $resultado;
        }


    }

?>
