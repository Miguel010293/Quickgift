

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>login - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../IMG/estilo.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playball&family=Satisfy&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
  background-image: linear-gradient(to left top, #ccdef3, #b5d1f1, #7fbbf3, #4685d6, #4788d3);
  height: 100vh;
}
#login .container #login-row #login-column .login-box {
  margin-top: 120px;
  max-width: 1000px;
  height: 420px;
  border: 1px solid #9C9C9C;
  background-image: linear-gradient(to bottom, #d2e3f1, #d1dff0, #acd0f1, #b6c0c9, #afc6e0);
}
#login .container #login-row #login-column .login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column .login-box #login-form #register-link {
  margin-top: -85px;
}
#pruebatexto{

    font-family: 'Playball', cursive;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    
</head>
<body>
<body>
	<div id="login">
    <h3 class="text-center text-white pt-5">HOME SHOWER</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="login-box col-md-12">
                    <form id="login-form" class="form" action="" method="post">
                        
                       <div id="pruebatexto">
                         <h2><br> <br> Hola <?php
                         session_start();
    
           echo $_SESSION['nombre'];
        ?> Sentimos mucho no poder contar con tu asistencia, muchas gracias por responder!</h2> 
                       <br>
                       
                       <h3>Que tengas un lindo dia!</h3>
                        </div>
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">


setTimeout("location.href='../'", 8000)

</script>
</body>
</html>

<