<?php

include("../dao/DAOregalo.php");
include("../modelo/regalo.php");
if(isset($_GET['add'])){
    $r = new Regalo(); 

    $r->regalo =$_POST['nombreimagen'];
    
    $r->imagen =addslashes(file_get_contents($_FILES['file']['tmp_name']));
    
     DAOregalo::registraRegalo($r);
    /*if($inser){
        //header("location:../vista/adminMenu.php");
        echo $_POST['nombreimagen'];
    }else{echo "error!";}*/
    header("location:../vista/FormRegalo.php");
}


?>