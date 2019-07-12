<?php 

$query = $this->db->query("SELECT * 
                           FROM clientes");

foreach ($query->result() as $row)
{
        echo $row->id;
        echo $row->username;
        echo $row->password;
        echo $row->nombre;
}

?>