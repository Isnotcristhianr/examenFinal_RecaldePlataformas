<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class modeloPacientes extends Model
    {
        protected $table = 'tbl_pacientes';
        protected $primaryKey = 'pac_id';
        protected $allowedFields = ['pac_nombre', 'pac_dni', 'pac_altura', 'pac_peso', 'pac_imc', 'pac_resultado'];

        public function listarPacientes()
        {
            $array = json_decode((file_get_contents('http://localhost/examenfinal_recalde/api/servicios/apiPacientes.php')), true);
            return $array;
        }

        public function listarPacienteId($data)
        {
            $valor = $this->db->table('tbl_pacientes');
            $valor-> where($data);

            return $valor-> get()-> getResultArray();
        }


        public function insertarPaciente($datos)
        {
            $array = json_decode((file_get_contents('http://localhost/examenfinal_recalde/api/servicios/apiPacientes.php?nombre=' . $datos['nombre'] . '&dni=' . $datos['dni'] . '&altura=' . $datos['altura'] . '&peso=' . $datos['peso'] . '&imc=' . $datos['imc'] . '&resultado=' . $datos['resultado'])), true);
            return $array;
        }

        public function actualizarPaciente($datos)
        {
            $array = json_decode((file_get_contents('http://localhost/examenfinal_recalde/api/servicios/apiPacientes.php?id=' . $datos['id'] . '&nombre=' . $datos['nombre'] . '&dni=' . $datos['dni'] . '&altura=' . $datos['altura'] . '&peso=' . $datos['peso'] . '&imc=' . $datos['imc'] . '&resultado=' . $datos['resultado'])), true);
            return $array;
        }
    }
