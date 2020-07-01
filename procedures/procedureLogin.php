<?php
include_once '../controller/ControllerLogin.php';
      
      $correo=$_POST["Correo"];
      $password=$_POST["Password"];
                  
      $Obj_Participante = new ControllerLogin();
      $Obj_Participante->ControladorInsertarUsuario($correo,$password);
      
      header ("Location:../vistas/Principal_Usuario.php");     

?>