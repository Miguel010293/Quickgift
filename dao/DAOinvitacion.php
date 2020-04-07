<?php
include("../config/Conexion.php");

class DAOinvitado{


  public static function registraInvitado($i)
  {
    $conn = new Conexion();
    $inserta=$conn->ddl("INSERT INTO invitacion VALUES(default,$i->invitado,$i->acompanantes
                                         ,'$i->confirmacion','$i->obsequio','2020-04-25','$i->regopcional')");
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
    $contenido = $conn->dml("SELECT * FROM invitacion WHERE confirmacion = 1");
    return $contenido;
  }

  public static function consultaInvitadoRechazo()
  {
    $conn = new Conexion();
    $contenido = $conn->dml("SELECT * FROM invitacion WHERE confirmacion = 0");
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
    $resul = $conn->ddl("INSERT INTO persona values(default,'$p->nombre',$p->telefono)");
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

  public static function listarPersonaAsiste()
  {
    $conn = new Conexion();
    $asiste = $conn->dml("SELECT nombre , confirmacion, acompanantes,regalo,regopcional FROM
    persona INNER JOIN invitacion ON persona.id = invitacion.invitado
    INNER JOIN regalo ON idregalo = obsequio WHERE confirmacion LIKE 'si'");
    return $asiste;
  }
  public static function listarPersonaNoAsiste()
  {
    $conn = new Conexion();
    $noAsiste = $conn->dml("SELECT nombre , confirmacion, acompanantes,regalo,regopcional FROM
    persona INNER JOIN invitacion ON persona.id = invitacion.invitado
    INNER JOIN regalo ON idregalo = obsequio WHERE confirmacion LIKE 'no'");
    return $noAsiste;
  }
  //--------------------------metodos de dao regalo----------------------------------

  public static function modificaEstado($id){

    $conn = new Conexion();
    $lista = $conn->dml("UPDATE regalo SET estado = 0 WHERE idregalo = $id ");
    return $lista;
}
}


?>