<?php 
defined('BASEPATH') OR exit('No direct script access allowed');  
class HomeController extends CI_Controller {  


public function index()
{
  $this->load->library('session');

  $data['nombreLog'] = $this->session->flashdata('nameSesion');
   $nombreSesion = $this->getNombreSesion();
       $this->load->view("home",$nombreSesion); 

}
public function ir_aProductos(){
  
}

public function getNombreSesion(){
    $data['nombreLog'] = $this->session->userdata('username');
    return $data;
}
                   
  /* public function getProductos(){

    $this->load->model('Modelhome');
    $arrayProductos = [];
    $prod = $this->Modelhome->cargarProductos(); 
  foreach($prod->result() as $producto){
      $productData = [];
      $productData['imagen']= $producto->imagen;
    $productData['nombre'] = $producto->nombre;
    $productData['descripcion'] = $producto->descripcion;
    $productData['precio'] = $producto->precio;
    $productData['stock'] = $producto->stock;
    array_push($arrayProductos, $productData);
  } 
    echo json_encode($arrayProductos);
 } */
 public function getProductos(){

  $this->load->model('Modelhome');
  $arrayProductos = [];
  $prod = $this->Modelhome->cargarProductos(); 
foreach($prod->result() as $producto){
    $productData = [];
    $productData['image']= $producto->image;
  $productData['name'] = $producto->name;
  $productData['description'] = $producto->description;
  $productData['price'] = $producto->price;
  $productData['id'] = $producto->id;
 
  array_push($arrayProductos, $productData);
} 
  echo json_encode($arrayProductos);
}
 public function get4Productos(){
   $this->load->model('Modelhome');
   $arrayProductos4 = [];
   $prod4 = $this->Modelhome->cargar4Productos();
   $productData4 = [];
   foreach($prod4->result() as $producto4){
    $productData4['image']= $producto4->image;
    $productData4['name'] = $producto4->name;
    $productData4['description'] = $producto4->description;
    $productData4['price'] = $producto4->price;
  /*   $productData4['stock'] = $producto4->stock; */
    array_push($arrayProductos4, $productData4);
   }
   echo json_encode($arrayProductos4);
 } 

}

?>