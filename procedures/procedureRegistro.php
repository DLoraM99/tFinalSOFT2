<?php
include_once '../controller/ControllerRegistro.php';
      $nombre=$_POST["Nombre"];
      $apellido=$_POST["Apellido"];
      $correo=$_POST["Correo"];
      $password=$_POST["Password"];
      $baseDatos=$_POST["BaseDatos"];
            
      $Obj_Participante = new ControllerRegistro();
      $Obj_Participante->ControladorInsertarUsuario($nombre,$apellido,$correo,$password,$baseDatos);
      
      header ("Location:../index.php?err=".$error);     

?>