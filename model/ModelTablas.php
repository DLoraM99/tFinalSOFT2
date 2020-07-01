<?php 
include_once '../connection/connectionDBSIMPLE.php';
class ModelTablas
{
  public function __construct()
  {
    $con = new Conexion();
  }
  
  public function InsertarUsuarioModelo($nombre,$apellido,$correo,$password,$baseDatos){
  try{   
       $obj = Conexion::singleton();
       $query = $obj->prepare('INSERT INTO registro (nombre, apellido, correo, password, baseDatos) VALUES (?,?,?,?,?)');
          $query -> bindParam(1, $nombre);
          $query -> bindParam(2, $apellido);
          $query -> bindParam(3, $correo);
          $query -> bindParam(4, $password);
          $query -> bindParam(5, $baseDatos);
       $query->execute();
       
    }catch(Exception $e){
        throw $e;
    }
  }
}

?>