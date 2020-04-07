<?php
session_start();
include("../modelo/invitacion.php");
include("../modelo/persona.php");
include("../dao/DAOinvitacion.php");




if(isset($_GET['agrega'])){

  
    $_SESSION['nombre']= $_POST['nombre'];
    $i= new Invitacion();
    $p = new Persona();
    
    $p->nombre=$_POST['nombre'];
    $p->telefono=$_POST['telefono'];
        
    $insertPers = DAOinvitado::registraPersona($p);
     
    if($insertPers){
    
    $resul = DAOinvitado::idpersona($p);
    
        foreach($resul as $data){
          $i->invitado =$data[0];
        }
        
        if(isset($_POST['idimagen'])){$i->obsequio=$_POST['idimagen'];}else{ $i->obsequio= null;}
        
        $i->acompanantes=$_POST['Npersonas'];
        if(isset($_POST['confirmacion'])){$i->confirmacion=$_POST['confirmacion'];}else{$i->confirmacion=null;}
        if(isset($_POST['idimagen'])){$i->obsequio=$_POST['idimagen'];}else{ $i->obsequio= null;}
        if(isset($_POST['regopcional'])){$i->regopcional = $_POST['regopcional'];}else{$i->regopcional=null;}
           
        /*$insertInvi = DAOinvitado::registraInvitado($i);
        if($_POST['cionfirmacion']='si'){

        }else{

        }*/
        if($insertInvi){
          header("location:../vista/succes.php");

        }else{
          echo "nel perro :V";
        }
     
    
    }
    
   
    

  

   
 }



?>
