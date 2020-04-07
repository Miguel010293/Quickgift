<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>UPS! parece que hubo un error. Porfavor intenta de nuevo o ponte en contacto con el organizador ;)</h1>
<h2><?php  echo $_SESSION['nombre']?></h2>
<script type="text/javascript">

setTimeout("location.href='FormInvitado.php'", 5000);
</script>
</body>
</html>