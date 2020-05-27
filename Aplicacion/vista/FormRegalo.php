<?php 
include("adminMenu.php");
include("headertable.php")

?>

<div class="container">
    
    <div id="addRegalo"><a>
            <i class="zmdi zmdi-plus"></i> &nbsp;<center><b>
                    <h3>Agregar Regalo</h3>
                </b></center>
        </a></div>
    <div id="registro">
        <div class="panel-heading">

            <center>
                <div class="panel-title"><b>Registro de obsequios</b> </div>
            </center>
        </div>
        <div style="padding-top:30px" class="panel-body">

            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
            <form action="../controlador/controladorRegalo.php?add=0" method="POST"  enctype="multipart/form-data">

                <div style="margin-bottom: 25px" class="a">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                    <input type="text" class="form-control" name="nombreimagen"  placeholder="nombre para el regalo.">



                </div>


                <div id="uploader">

                    <input type="file" name="file" id="file" multiple>
                    <label class="carga" for="file"><i class="icon-picture"></i>-- Subir una imagen</label></div>



                <div style="margin-top:10px" class="form-group">
                    <!-- Button -->
                    <center>
                        <div class="agrega">

      <input type="submit" class="btn btn-success" id ="Agrega" value="Agregar">

                        </div>
                    </center>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>

            </form>

        </div>
    </div>
   
    <div id="tables">

    </div>


</body>

</html>