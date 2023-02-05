<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Model\ModeloPacientes as ModeloPacientes;
use App\Models\ModeloPacientes as ModelsModeloPacientes;
use App\Models\ModeloPaciente;

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

        $objPaciente = new ModeloPaciente();
        $respuesta = $objPaciente->listarPacienteId($data);

        $datos=['datos'=>$respuesta];

        $datos['cabecera']=view('templates/encabezado.php');
        $datos['pie']=view('templates/pie.php');

        return view('/ventanas/obtenerPaciente.php',$datos);

    }

    public function asignarImc2(){
        $datos['cabecera']=view('templates/encabezado.php');
        $datos['pie']=view('templates/pie.php');

        return view('/ventanas/asignarImc2.php',$datos);

    }

    //update
    public function actualizarPaciente()
    {
        
        $datos = [
            "pac_nombre" => $_POST['nombre'],
            "pac_dni" => $_POST['dni'],
            "pac_altura" => $_POST['altura'],
            "pac_peso" => $_POST['peso'],
            "pac_imc" => $_POST['imc'],
            "pac_resultado" => $_POST['resultado'],
        ];
        
        $id = $_POST['id'];
        
        $objLibro = new ModeloPaciente();
        $datos['cabecera']=view('templates/encabezado.php');
        $datos['pie']=view('templates/pie.php');
        $respuesta = $objLibro->actualizar($datos, $id);

        if ($respuesta) {
            return redirect()->to('http://localhost/examenfinal_recalde/pacientes/index.php/pacientes');
        } else {
            echo ('<script>
                alert("Error, no se pudo actualizar");
            </script>');
        }
    }

    //ir filtrado
    public function filtradoPacientes(){
        $datos['cabecera']=view('templates/encabezado.php');
        $datos['pie']=view('templates/pie.php');

        return view('/ventanas/filtradoPacientes.php',$datos);
    }

    //calculo IMC
    public function calculoImc(){
        $datos['cabecera']=view('templates/encabezado.php');
        $datos['pie']=view('templates/pie.php');

        return view('/ventanas/calcularImc.php',$datos);
    }
}
?>