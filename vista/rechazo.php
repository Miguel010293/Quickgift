<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Playball&family=Satisfy&display=swap" rel="stylesheet">
</head>
<body>
    
<style>
    #texto{

font-family: 'Playball', cursive;
}

</style>
<div id="texto">
<h1>ASH que lastima que no aceptó gran hp </h1>
<h2><?php  echo $_SESSION['nombre']?></h2>
</div>
<script type="text/javascript">

setTimeout("location.href='FormInvitado.php'", 5000);
</script>
</body>
</html>