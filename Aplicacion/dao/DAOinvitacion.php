<?php
include("../config/Conexion.php");

class DAOinvitado{


  public static function registraInvitado($i)
  {
    $conn = new Conexion();
   $inserta = $conn->ddl("INSERT INTO `invitacion`(`idinvitacion`, `invitado`, `acompanantes`, `confirmacion`, `obsequio`, `fecha`, `regopcional`)
   VALUES (default,$i->invitado,$i->acompanantes,'$i->confirmacion',$i->obsequio,'2020-04-25','$i->regopcional')");
   
   if($inserta){return true;}else{return false;}
  }
  public static function registraInvitado2($in)
  {
    $conn = new Conexion();
   $inserta = $conn->ddl("INSERT INTO `invitacion`(`idinvitacion`, `invitado`, `acompanantes`, `confirmacion`, `obsequio`, `fecha`, `regopcional`)
   VALUES (default,$in,null,'no',null,'2020-04-25','')");
   
   if($inserta){return true;}else{return false;}
  }
  public static function consultaInvitadoID($id)
  {
    $conn = new Conexion();
    $contenido = $conn->dml("SELECT * FROM invitacion WHERE idinvitacion=$id");
    return $contenido;
  }
  public static function consultaInvitadoConfirmado()
  {
    $conn = new Conexion();
    $contenido = $conn->dml("SELECT nombre , confirmacion, acompanantes,regalo,regopcional FROM
    persona INNER JOIN invitacion ON persona.id = invitacion.invitado
    INNER JOIN regalo ON idregalo = obsequio WHERE confirmacion LIKE 'si'");
    return $contenido;
  }

  public static function consultaInvitadoRechazo()
  {
    $conn = new Conexion();
    $contenido = $conn->dml("SELECT nombre ,telefono, confirmacion FROM
    persona INNER JOIN invitacion ON persona.id = invitacion.invitado
     WHERE confirmacion LIKE 'no'");
    return $contenido;
  }
  public static function modificaAsistencia($i)
  {
    $conn = new Conexion();
    $modifica = $conn->ddl("UPDATE invitacion set confirmacion = $i->confirmacion WHERE idinvitacion = $i");
  }

  //---------------------aca se separan los metodos segun su modelo------------------------------------------------------------------------------------

  public static function registraPersona($p)
  {
    $conn = new Conexion();
    $resul = $conn->ddl("INSERT INTO persona (id,nombre,telefono)values(default,'$p->nombre',$p->telefono)");
    if ($resul) {
      return true;
    } else {
      return false;
    }
  }
  
  public static function idpersona($p)
  {
    $conn = new Conexion();
    $identificador = $conn->dml("SELECT id FROM persona WHERE nombre = '$p->nombre' AND telefono = $p->telefono");
    return $identificador;
  }
  public static function listarPersona()
  {
    $conn = new Conexion();
    $personas = $conn->dml("SELECT nombre , confirmacion, acompanantes,regalo,regopcional FROM
    persona INNER JOIN invitacion ON persona.id = invitacion.invitado
    INNER JOIN regalo ON idregalo = obsequio");
    return $personas;
  }

  public static function person()
  {
    $conn = new Conexion();
    $persona = $conn->dml("SELECT * FROM persona WHERE usuario is null");
    return $persona;
  }
  //--------------------------metodos de dao regalo----------------------------------

  public static function modificaEstadoRegalo($id){
    
    $conn = new Conexion();
    $lista = $conn->ddl("UPDATE regalo SET estado = 0 WHERE idregalo = $id ");
    if($lista){return true;}else{return false;}
}
 
//------------------Se suman las personas que confirman y sus invitados para levar un conteo total de personas que asisten------

public static function totalPersonas(){


 $conn = new Conexion();
 $totalP = $conn->dml("SELECT COUNT(nombre) + SUM(acompanantes) as numeroPersonas FROM persona 
 INNER JOIN invitacion on persona.id = invitacion.invitado WHERE confirmacion LIKE 'si'");
 return $totalP;
} 

}


?>