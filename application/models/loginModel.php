<?php


class loginModel extends CI_Model{

    public function login($username, $password){
        $query = $this->db->query("SELECT username, password
                          FROM clientes
                          WHERE username LIKE '$username' AND password LIKE '$password'");

        if($query->num_rows() == 1){
            // num_rows te devuelve el numero de filas devuelta por la consulta
            // con lo cual si nos devuelve solo 1, sabremos que el usuario es correcto y solo existe uno
            // que solo deberia existir uno con el mismo username, pero por si acaso
            return true;
        }
        else{
            return false;
        }
    }

}

?>