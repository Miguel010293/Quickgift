<?php 

class Invitacion{


public $invitado;
public $acompanantes;
public $confirmacion;
public $obsequio;
public $fecha;
public $regopcional;


public function __construct()
     {
       
       $this->invitado=0;
       $this->acompanantes=0;
       $this->confirmacion=0;
       $this->obsequio=0;
       $this->fecha=""; 
       $this->regopcional='';
    }
}
?>