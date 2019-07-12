<?php 

class WelcomeModel extends CI_Model{
   
    public function getAllClientes(){
        $query = $this->db->get("clientes");
        
        return $query->result();
    }

    public function getClienteByUsername($username){
        
    }


}
?>