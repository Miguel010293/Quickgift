<?php
include("../config/Conexion.php");


class DAOregalo{


public static function registraRegalo($r){
$conn = new Conexion();
$insert = $conn->ddl("INSERT INTO regalo VALUES(DEFAULT,'$r->regalo','$r->imagen',1)");

if($insert){return true;} else {return false;}
}

public static function listarRegalos(){

    $conn = new Conexion();
    $lista = $conn->dml("SELECT * FROM `regalo` WHERE estado = 1 ORDER BY idregalo DESC");
    return $lista;
}
public static function listarRegaloSeleccionado($id){

    $conn = new Conexion();
    $lista = $conn->dml("SELECT * FROM regalo WHERE estado = 1 AND idregalo = $id");
    return $lista;
}
}
?>