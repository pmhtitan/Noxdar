<?php
 defined('BASEPATH') OR exit('No direct script access allowed');  

 class Marcador extends CI_Controller {  


    public function index(){
        $this->load->library('session');
        $this->load->helper('form','url');
        $this->load->view('marcadores/marcadorDeportivo'); 
    }
    
?>
