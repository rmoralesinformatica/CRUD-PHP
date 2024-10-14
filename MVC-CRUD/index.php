<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
    <style>
    h1{text-align:center;
    }

    .subtitulo{
        font-size:12px;
    }

    body{
        background-color:#FFC;
    }

    table td{
        text-align:center;
        border:1px #000099 dotted;

    }
    .centrado{
        text-align: center;
    }
    table .sin{
        border:0;
    }

    table .bot{
        padding:0 5px;
        display:inline;
        border:0;
    }

    table .primera_fila{
        font-size:1.5em;
        text-decoration:underline;
        background-color:#FC3;
    }

    .centrado{
        text-align:center;
    }
    </style>
</head>
<body>
    <h1>MODELO VISTA CONTROLADOR</h1>
    <br>
    <?php 
        require_once("CONTROLADOR/1.Personas_controlador.php")
    ?>
</body>
</html>