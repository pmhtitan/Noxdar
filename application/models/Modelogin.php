<?php  
 class Modelogin extends CI_Model  
 { 
     
      function can_login($username, $password)  
      {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('users');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }  
      function can_register($RegisUser)  
      {  
           $this->db->where('username', $RegisUser);  
           $query = $this->db->get('users');  
           if($query->num_rows() > 0)  
           {  
                return false;  
           }  
           else  
           {  
                return true;       
           }  
      }
      
      function new_register($RegisUser, $RegisPass, $RegisEmail,$RegisPhone, $RegisAdress)
      {
        /*   $sql = "insert into users (username, password, email, phone, adress)
          values ('"$RegisUser"', '"$RegisPass"', '"$RegisEmail"',"$RegisPhone",'"$RegisAdress"')";
          $this->db->query($sql); */
          $data = array( 
               'username' => $RegisUser , 
               'password'=>  $RegisPass, 
               'email'	=> $RegisEmail,
               'phone'	=>   $RegisPhone,
               'adress'	=>  $RegisAdress,
           );
       $this->db->insert('users', $data);
      }
 }  