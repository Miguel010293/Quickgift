<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Succes:)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        * {
            box-sizing: border-box;
            /* outline:1px solid ;*/
        }

        body {
            background: #ffffff;
            background: linear-gradient(to bottom, #ffffff 0%, #e1e8ed 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e1e8ed', GradientType=0);
            height: 100%;
            margin: 0;
            background-repeat: no-repeat;
            background-attachment: fixed;

        }

        .wrapper-1 {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .wrapper-2 {
            padding: 30px;
            text-align: center;
        }

        h1 {
            font-family: 'Kaushan Script', cursive;
            font-size: 4em;
            letter-spacing: 3px;
            color: #008CBA;
            margin: 0;
            margin-bottom: 20px;
        }

        .wrapper-2 h4 {
            margin: 0;
            font-size: 1.3em;
            margin-bottom: 14px;
            color: #3e3e3e;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
        }

        .wrapper-2 p {
            margin: 0;
            color: #5f5f5f;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
            font-size: 18px;
        }

        .go-home {
            color: #fff;
            background: #008CBA;
            border: none;
            padding: 10px 50px;
            margin: 30px 0;
            border-radius: 30px;
            text-transform: capitalize;
            box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
        }

        .footer-like {
            margin-top: auto;
            background: #D7E6FE;
            background: #dadada;
            padding: 6px;
            text-align: center;
        }

        .footer-like p {
            margin: 0;
            padding: 4px;
            color: #5892FF;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
        }

        .footer-like p a {
            text-decoration: none;
            color: #5892FF;
            font-weight: 600;
        }

        @media (min-width:360px) {
            h1 {
                font-size: 4.5em;
            }

            .go-home {
                margin-bottom: 20px;
            }
        }

        @media (min-width:600px) {
            .content {
                max-width: 1000px;
                margin: 0 auto;
            }

            .wrapper-1 {
                height: initial;
                max-width: 620px;
                margin: 0 auto;
                margin-top: 100px;
                box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
            }

        }
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Mensaje+</title>
        <link rel="stylesheet" href="./style.css">
    </head>

    <body>

        <div class=content>
            <div class="wrapper-1">
                <div class="wrapper-2">
                    <h1>¡¡Gracias por confirmar!!   
                        <br>
                        <?php
                        session_start();
                        echo $_SESSION['nombre'];
                        ?>
                    </h1>
                    <h4>Te agradecemos tu participación con nuestra plataforma ¡Te esperamos ansiosos!</h4>
                    <h3><p> Que tengas un lindo dia ♥☺!</p><h3>

                    <button class="go-home">
                        ♥
                    </button>
                </div>
 
            </div>
        </div>



        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
        <!-- partial -->

    </body>

    </html>
    <script type="text/javascript">
     setTimeout("location.href='../'", 8000);
    </script>
</body>

</html>