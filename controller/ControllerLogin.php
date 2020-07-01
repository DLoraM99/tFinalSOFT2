<?php
include_once '../model/ModelLogin.php';
class ControllerLogin
{

  public function ControladorInsertarUsuario($correo,$password){
    try{   
          $obj=new ModelLogin();
          return $obj->InsertarUsuarioModelo($correo,$password);
     }catch(Exception $e){
         throw $e;
     }  
  } 
  
}
?>
