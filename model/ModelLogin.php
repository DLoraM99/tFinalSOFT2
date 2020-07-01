<?php 
include_once '../connection/connection.php';
class ModelLogin
{
  public function __construct()
  {
    $con = new Conexion();
  }
  
  public function InsertarUsuarioModelo($correo,$password){
  try {
        $obj = Conexion::singleton();
        $query = $obj->prepare("SELECT password FROM registro WHERE correo=?" );
        $query -> bindParam(1, $email);
        $query->execute();
        $pass = $query->fetchAll();
        if ($pass == $password) {
            
            header ("Location:../vistas/Principal_Usuario.php"); 
        }
    } catch (PDOException $e) {
        echo "Ocurrió un error en la conexión con el registro";
    }
  
  }
}

?>