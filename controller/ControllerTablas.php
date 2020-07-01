<?php
include_once '../model/ModelTablas.php';
class ControllerTablas
{

   
  public function ControladorInsertarUsuario($nombre,$apellido,$correo,$password,$baseDatos){
    try{   
          $obj=new ModelTablas();
          return $obj->InsertarUsuarioModelo($nombre,$apellido,$correo,$password,$baseDatos);
     }catch(Exception $e){
         throw $e;
     }  
  } 
  
}
?>
