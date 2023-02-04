<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Model\modeloPacientes as modeloPacientes;
use App\Models\modeloPacientes as ModelsModeloPacientes;

class controladorPaciente extends Controller{
    
    //importar js y cs
    public function index(){
       // $this -> load -> helper('url');
        //$this -> load -> helper('test');
    }

    public function inicio(){
        $datos['cabecera']=view('templates/encabezado.php');
        $datos['pie']=view('templates/pie.php');

        return view('/ventanas/inicio.php',$datos);
    }

    public function registro(){
        $datos['cabecera']=view('templates/encabezado.php');
        $datos['pie']=view('templates/pie.php');

        return view('/ventanas/registro.php',$datos);
    }

    public function pacientes(){
        $datos['cabecera']=view('templates/encabezado.php');
        $datos['pie']=view('templates/pie.php');

        return view('/ventanas/pacientes.php',$datos);
    }

    public function obtenerPaciente($id){

        $data=['pac_id'=>$id];

        $objPaciente = new ModelsModeloPacientes();
        $respuesta = $objPaciente->listarPacienteId($data);

        $datos=['paciente'=>$respuesta];

        $datos['cabecera']=view('templates/encabezado.php');
        $datos['pie']=view('templates/pie.php');

        return view('/ventanas/obtenerPaciente.php',$datos);

    }

    public function asignarImc2(){
        $datos['cabecera']=view('templates/encabezado.php');
        $datos['pie']=view('templates/pie.php');

        return view('/ventanas/asignarImc2.php',$datos);

    }
}

?>