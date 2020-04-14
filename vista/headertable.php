<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <title>Document</title>
    <script type="text/javascript">
        $(document).ready(function() {


            $("#registro").hide();
            $("#addRegalo").click(function() {
                $("#registro").show();
                $("#addRegalo").hide();




            });


        });


        $(document).ready(function() {

            $("#tables").show(function() {
                $.ajax({
                    data: 'algo',
                    url: 'tablaregalo.php',
                    type: 'post',
                    success: function(response) {
                        $("#tables").html(response);
                    }

                });
            });
            
        });
    </script>
</head>

<body>
    <style type="text/css">
        .filterable .panel-heading .pull-right {
            margin-top: -20px;
        }

        .filterable .filters input[disabled] {
            background-color: transparent;
            border: none;
            cursor: auto;
            box-shadow: none;
            padding: 0;
            height: auto;
        }

        .filterable .filters input[disabled]::-webkit-input-placeholder {
            color: #333;
        }

        .filterable .filters input[disabled]::-moz-placeholder {
            color: #333;
        }

        .filterable .filters input[disabled]:-ms-input-placeholder {
            color: #333;
        }

        #registro {
            background-color: white;
            height: 200px;
            width: 50%;
            border: 1px solid #000000;
            -moz-border-radius: 9px;
            -webkit-border-radius: 9px;

        }

        .panel-title {
            border: 1px solid white;
            -moz-border-radius: 9px;
            -webkit-border-radius: 9px;
            background-color: #B9BDE9;
        }

        .agrega {

            margin-left: 40%;

        }

        input[type="file"] {
            display: none;
        }

        label {
            border: 1px solid white;
            -moz-border-radius: 9px;
            -webkit-border-radius: 9px;
            background-color: #B9BDE9;
            background-color: white;
            width: 230px;
            height: 20px;
            display: flex;
            font-size: 15px;

            justify-content: center;
            align-items: center;
            font-family: "Montserrat", sans-serif;
        }

        .uploader {
            border: 1px solid #ccc;
            border-color: #000000;
            width: 250px;
            padding: 5px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        #a {
            margin-left: 50px;
        }

        #addRegalo {

            width: 25%;
        }
    </style>