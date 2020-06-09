<?php

class Conexion{


  private $server;
  private $user;
  private $pass;
  private $db;
  private $conn;


  public function __construct()
  {
      $this->server='localhost';
      $this->user='root';
      $this->pass='';
      $this->db='uoolo_25471762_quickgift';
      $this->conn= new mysqli($this->server,$this->user,$this->pass,$this->db)or die("error de conexion".mysqli_error($this->conn));
  }


  public function dml($sql){

    $contenedor=$this->conn->query($sql);
      return $contenedor->fetch_all();
  }

  public  function ddl($sql){
   
     $consulta= $this->conn->query($sql);
     if($consulta){return true;}else{return false;} 
  }


   public function validaLogin($usu,$pass){

    $sql = "SELECT * FROM persona WHERE usuario = '$usu' AND clave = '$pass' ";

    $busca = $this->conn->query($sql);
    $resul = $busca->fetch_all();
    
    if($resul){
       
      return true;
    }else{

      return false;

    }

   }

   public function registraAdmin($usuario,$pass){

     $insert = "INSERT INTO persona (usuario,clave) VALUES('$usuario','$pass')";
     $valor = $this->conn->query($insert);
        
         

   }

}


?>