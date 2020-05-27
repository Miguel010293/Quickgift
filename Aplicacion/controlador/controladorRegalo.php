<?php

include("../dao/DAOregalo.php");
include("../modelo/regalo.php");
if(isset($_GET['add'])){
    $r = new Regalo(); 

    $r->regalo =$_POST['nombreimagen'];
    
    $r->imagen =addslashes(file_get_contents($_FILES['file']['tmp_name']));
    
     DAOregalo::registraRegalo($r);
    
    header("location:../vista/FormRegalo.php");
    //prueba de submit
}


?>