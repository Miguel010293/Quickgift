
<?php
session_start();
error_reporting(0);
$adminsesion =$_SESSION['admin']; 
if($adminsesion== '' && $adminsesion== null ){
 
	echo "<script>
	alert('Lo sentimos debe inciar sesión para ver esta pagina');
	window.location='adminLogin.php';
	</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        section {
    padding-top: 4rem;
    padding-bottom: 5rem;
    background-color: #f1f4fa;
}
.wrap {
    display: flex;
    background: white;
    padding: 1rem 1rem 1rem 1rem;
    border-radius: 0.5rem;
    box-shadow: 7px 7px 30px -5px rgba(0,0,0,0.1);
    margin-bottom: 2rem;
}

.wrap:hover {
    background: linear-gradient(135deg,#6394ff 0%,#0a193b 100%);
    color: white;
}

.ico-wrap {
    margin: auto;
}

.mbr-iconfont {
    font-size: 4.5rem !important;
    color: #313131;
    margin: 1rem;
    padding-right: 1rem;
}
.vcenter {
    margin: auto;
}

.mbr-section-title3 {
    text-align: left;
}
h2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}
.display-5 {
    font-family: 'Source Sans Pro',sans-serif;
    font-size: 1.4rem;
}
.mbr-bold {
    font-weight: 700;
}

 p {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    line-height: 25px;
}
.display-6 {
    font-family: 'Source Sans Pro',sans-serif;
    font-size: 1re}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<section>
<div class="container">
           <center><img src="images/qfimage.png" ></center> 
          <center><p> <h2> Bienvenido a QuickGift, un lugar en el que podrá<br>realizar la invitación digital 
             de sus amigos <br> de una manera sencilla y moderna.</h2> </p></center>	
		<div class="row mbr-justify-content-center">

            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa fa-user"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"> <a href="FormPersona.php">Personas</a>  <span></span></h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6" >Observe en lista, la cantidad de personas que se han registrado en el sistema</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa fa-ban"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"><a href="FormPersonaRechaza.php">Rechazos</a> 
                            
                        </h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Descarte invitados que no podrán asistir a su reunion o evento cultural</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa fa-handshake-o"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"> <a href="FormPersonaAsiste.php">Aceptaciones</a> 
                           
                        </h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6"> Mantengase al tanto de la cantidad de personas que asisitirán a su evento</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa fa-gift "></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"><a href="FormRegalo.php"> Nube de regalos</a>  </h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6"> Carga las imagenes que servirán como regalo, para que el invitado seleccione alguno de ellos</p>
                    </div>
                </div>
            </div>

            

            
        </div>

</div>

</section>
<script type="text/javascript">

</script>
</body>
</html>
