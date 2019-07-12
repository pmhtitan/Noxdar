<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginController extends CI_Controller{


    public function index(){

    $this->load->view('login_view');
    

    }

    public function hola(){
        echo "Hola buenas";
    }

public function comprobarLogin(){
    echo "he llegado al controller";
    die();
    $username = $this->input->post['username'];
    $password = $this->input->post['password'];
    $this->load->model('loginModel');
   


    if($username != '' && $password != ''){
        $success = $this->loginModel->login($username, $password);

        if($success){
            $this->load->view('welcome_message');
        }
        else{

            $datos['mensaje'] = 'El Login Ha sido incorrecto';
            $this->load->view('login_view', $datos);
         

        }
    }else{ 
        // Aunque este else no te haria falta si en la propia view del login 
        // compruebas que los campos no esten vacios con un required o algo asi
        // en el formulario
        $datos['mensaje'] = 'Por favor, introduzca datos en los campos';
            $this->load->view('login_view', $datos);
    }

    

}
}

?>