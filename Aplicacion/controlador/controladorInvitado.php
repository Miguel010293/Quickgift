<?php
session_start();
error_reporting(0);
include("../modelo/invitacion.php");
include("../modelo/persona.php");
include("../dao/DAOinvitacion.php");





if(isset($_GET['agrega'])){


  $_SESSION['nombre'] = $_POST['nombre'];
  $i = new Invitacion();
  $p = new Persona();

  $p->nombre = $_POST['nombre'];
  $p->telefono = $_POST['telefono'];
  $invipers=DAOinvitado::registraPersona($p);
  
  /*---------Punto critico----------------------------------------------------*/
  if($invipers){

    if ($_POST['confirmacion']=='si') {
      
      if(!$_POST['idimagen']==null){
        $resul = DAOinvitado::idpersona($p);
      foreach ($resul as $data) {
        $i->invitado = $data[0];
      }
      
      $i->confirmacion = $_POST['confirmacion']; 
      $i->acompanantes = $_POST['Npersonas'];
      $i->regopcional = $_POST['regopcional'];
        $i->obsequio= $_POST['idimagen'];
        $id = $_POST['idimagen'];
        DAOinvitado::registraInvitado($i);
        //echo $id= $_POST['idimagen'];
        DAOinvitado::modificaEstadoRegalo($id);
      header("location:../vista/succes.php");
      
      }else{
        $resul = DAOinvitado::idpersona($p);
        foreach ($resul as $data) {
          $i->invitado = $data[0];
        }
        
        $i->confirmacion = $_POST['confirmacion']; 
        $i->acompanantes = $_POST['Npersonas'];
        $i->regopcional = $_POST['regopcional'];
        
          DAOinvitado::registraInvitado1($i);
          //echo $id= $_POST['idimagen'];
          
        header("location:../vista/succes.php");
         
      }
      /*$i->obsequio = $_POST['idimagen'];
      if(!$_POST['regopcional']==null){
        $i->regopcional = $_POST['regopcional'];
      }else{
        $i->regopcional =null;
      }*/
      
      
//------------------------------------------------------------------------------------------------------------------
    } elseif($_POST['confirmacion']=='no'){
      
      $in = new Invitacion();
      
      $resul = DAOinvitado::idpersona($p);
      foreach ($resul as $data) {
        $in= $data[0];
      }
      

      DAOinvitado::registraInvitado2($in);
      header("location:../vista/rechazo.php");
    }else{
     echo "<script>
      
      alert('Debe confirmar la asitencia dando click en SI o NO, porfavor intentelo de nuevo');
      window.location= '../vista/FormInvitado.php';
      </script>";
    }
  
    
      
  }
    
}
  

    


  

   
 



?>
