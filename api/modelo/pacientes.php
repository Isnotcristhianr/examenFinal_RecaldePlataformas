<?php
    include '../modelo/conexion.php';

    class pacientes{

        private $con="";

        public function __construct(){
            
            $obj=new coneccion();
            $this->con=$obj->getConeccion();

        }

        //select
        
        public function selectPacientes(){
            
            $query = "SELECT *FROM tbl_pacientes;";
            $resultado=$this->con->prepare($query);
            $resultado->execute();

            return $resultado;
        }

        public function selectPacientesId($id){
            
            $idUsuario = $id;
            
            $query = "SELECT *FROM tbl_pacientes WHERE pac_id='".$id."';";
            $resultado=$this->con->prepare($query);
            $resultado->execute();

            return $resultado;
        }



    }

?>