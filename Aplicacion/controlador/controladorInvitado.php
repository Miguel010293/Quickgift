<?php
session_start();
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
      $resul = DAOinvitado::idpersona($p);
      foreach ($resul as $data) {
        
      }
      $i->invitado = $data[0];
      $i->confirmacion = $_POST['confirmacion']; 
      $i->acompanantes = $_POST['Npersonas'];
      $i->obsequio = $_POST['idimagen'];
      $i->regopcional = $_POST['regopcional'];
      DAOinvitado::registraInvitado($i);
      echo $id= $_POST['idimagen'];
      DAOinvitado::modificaEstadoRegalo($id);
    header("location:../vista/succes.php");

    } elseif($_POST['confirmacion']=='no'){
      
      $in = new Invitacion();
      
      $resul = DAOinvitado::idpersona($p);
      foreach ($resul as $data) {
        $in= $data[0];
      }
      echo $data[0];

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
