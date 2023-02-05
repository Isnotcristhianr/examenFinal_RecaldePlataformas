<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class ModeloPaciente extends Model
    {
        protected $table = 'tbl_pacientes';
        protected $primaryKey = 'pac_id';
        protected $allowedFields = ['pac_nombre', 'pac_dni', 'pac_altura', 'pac_peso', 'pac_imc', 'pac_resultado'];

        public function listarPacientes()
        {

        }

        public function listarPacienteId($data)
        {
            $valor = $this->db->table('tbl_pacientes');
            $valor-> where($data);

            return $valor-> get()-> getResultArray();
        }

}
