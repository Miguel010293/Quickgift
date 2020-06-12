<?php
session_start();

include("../config/Conexion.php");

if (isset($_GET['log'])) {

    


  $usuario = $_POST['usuario'];

    $passInicial = $_POST['pass'];
      $pass = md5($passInicial);
    $conn = new Conexion();


    $valida = $conn->validaLogin($usuario, $pass);

    if ($valida) {
      $_SESSION['admin']=$_POST['usuario'];
        header("location:../vista/adminMenu.php");
    } else {
      
        echo "<script>
        
        alert ('Error de usuario o contraseña por favor intente de nuevo');
        window.location='../vista/adminLogin.php';
        </script>";
    }

}

?>