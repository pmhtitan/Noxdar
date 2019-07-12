<?php  
 class Modelhome extends CI_Model  
 /* CARGAR SLIDER PRODUCTOS */
 {  
      function cargarProductos()
      {  
        /*  $productos = $this->db->get('productos'); */
         $productos = $this->db->query('SELECT * FROM products ORDER BY id DESC LIMIT 9');
         return $productos;
         
      }
      function cargar4Productos()
      {
         
         $productos4 =  $this->db->query('SELECT * FROM products ORDER BY id DESC LIMIT 3'); 
         /* $productos4 =  $this->db->query('SELECT * FROM products ORDER BY id DESC LIMIT 3');  */
        /*  $this->db->select('*');
         $this->db->from('productos');
         $this->db->order_by('DESC');
         $this->db->limit('4');
         $productos4 =  $this->db->get();   */  
           
        return $productos4;
      }
    }