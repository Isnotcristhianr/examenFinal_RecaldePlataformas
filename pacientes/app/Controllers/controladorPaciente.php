<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Model\modeloPaciente;

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
}

?>