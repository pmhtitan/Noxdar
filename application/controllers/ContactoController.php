<?php 
defined('BASEPATH') OR exit('No direct script access allowed');  
class ContactoController extends CI_Controller {  

public function index()
{
    $this->load->library('session');
   $nombreSesion = $this->getNombreSesion();
   $this->load->view("contacto",$nombreSesion);

}


public function getNombreSesion(){
    $data['nombreLog'] = $this->session->userdata('username');
    return $data;
}
                   
  public function getProductos(){

    $this->load->model('Modelhome');
    $arrayProductos = [];
    $prod = $this->Modelhome->cargarProductos(); 
  foreach($prod->result() as $producto){
      $productData = [];
    $productData['nombre'] = $producto->nombre;
    $productData['descripcion'] = $producto->descripcion;
    $productData['precio'] = $producto->precio;
    $productData['stock'] = $producto->stock;
    array_push($arrayProductos, $productData);
  } 
    echo json_encode($arrayProductos);
 } 

}

?>