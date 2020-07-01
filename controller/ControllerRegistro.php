
<?php
include_once '../model/ModelRegistro.php';
class ControllerRegistro
{

   
  public function ControladorInsertarUsuario($nombre,$apellido,$correo,$password,$baseDatos){
    try{   
          $obj=new ModelRegistro();
          return $obj->InsertarUsuarioModelo($nombre,$apellido,$correo,$password,$baseDatos);
     }catch(Exception $e){
         throw $e;
     }  
  } 
  
}
?>
