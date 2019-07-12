<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Login extends CI_Controller {  

      public function index()  
      {  
        $this->load->helper('form','url');
        $this->load->library('session');
          //functions
           //http://localhost/tutorial/codeigniter/login/login  
          
           $data['title'] = 'Login Noxdar';  
           $this->load->view("vista_login", $data); 
          
      }  

      function login_validation()  
      {  
         /*
          die();*/
          // $this->load->library('form_validation');    
          // if($this->form_validation->run())  
          // {  
                //true  
                $username = $this->input->post('username');  
                $password = $this->input->post('password');  
                /* if($username != null || $password != null){ */
                //model function  //cargar modelo
                
                $this->load->model('modelogin');  
                if($this->modelogin->can_login($username, $password))  
                {  
                     $session_data = array(

                          'username'     =>     $username  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(base_url() . 'index.php/login/enter');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Usuario o contraseña incorrecta');  
                    redirect(base_url(),'refresh');  
                }
              }
       function login_invitado(){
                   $username = "invitado";

                   $session_data = array(
                        'username' => $username
                   );

                   $this->session->set_userdata($session_data);
                   redirect(base_url(). 'index.php/login/enter_invitado');
              }  
          // }  
         /*   else  
           {  
                //false  
                $this->session->set_flashdata('error', 'Buen Intento Hacker de mierda');  
                redirect(base_url(),'refresh');   
           }  
      }  */ 
      function registration_validation(){
           $RegisUser = $this->input->post('RegisUser');
           $RegisPass = $this->input->post('RegisPass');
           $RegisEmail = $this->input->post('RegisEmail');
           $RegisPhone = $this->input->post('RegisPhone');
           $RegisAdress = $this->input->post('RegisAdress');

           if($RegisUser !=null || $RegisPass != null){

               $this->load->model('modelogin'); 

                if($this->modelogin->can_register($RegisUser))
                {
                    $this->modelogin->new_register($RegisUser, $RegisPass, $RegisEmail,$RegisPhone, $RegisAdress); 
                    $this->session->set_flashdata('error', 'Se ha creado correctamente su usuario');  
                    redirect(base_url(),'refresh');  
                }
                else
                {
                    $this->session->set_flashdata('error', 'El usuario que ha intentado registrar ya existe.');  
                    redirect(base_url(),'refresh');  
                }
           }
      }
      function enter(){  

        $dataLog['nombreLog'] = $this->session->userdata('username');
        $data = $this->session->userdata('username');
        
        $this->session->set_flashdata('nameSesion', $data);
 
             $this->load->view("home",$dataLog);
              /* FUNCION MOSTRAR USUARIO LOGEADO NO PERDER  echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  */
                /* FUNCION LOGOUT NO PERDER echo '<label><a href="'.base_url().'index.php/login/logout">Logout</a></label>';  */
      }
      
      function enter_invitado(){
          $dataLog['nombreLog'] = $this->session->userdata('username');
          $data = $this->session->userdata('username');
          
          $this->session->set_flashdata('nameSesion', $data);
   
               $this->load->view("home",$dataLog);

      }
      function logout()  
      {  
           $this->session->unset_userdata('username');  
          redirect(base_url(),'refresh');  
      }  
      function prueba(){
        $datito['a'] ="datoprueba1";
        $datito['b'] ="datoprueba2";
        echo json_encode($datito);
      }
 }  