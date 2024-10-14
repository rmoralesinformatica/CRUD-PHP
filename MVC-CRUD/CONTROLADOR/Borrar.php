<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar.php</title>
</head>

<body>
    <?php

    include('../MODELO/1.Cconectar_modelo.php');//Incluyo el archivo de conexion

        $conexion = Cconectar_modelo::conexion(); // Establece la conexión

    $id = $_GET["id"]; //creo variable con parametro añadido del index.html

    /*llamamos a la variable conexion que esta dentro del include
   Realizando una consulta para que borre del array el registro con ese $id */

    $conexion->query("DELETE FROM datos_usuarios WHERE Id = '$id'");
  
    header('Location: ../index.php');
    ?>
</body>

</html>