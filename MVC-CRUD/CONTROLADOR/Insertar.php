<?php

/*se encarga de una acción específica en la lógica de control,
 por lo que debe estar en la carpeta de controladores.*/ 
 
include('../MODELO/1.Cconectar_modelo.php');

$conexion =  Cconectar_modelo::conexion();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['Nom'];
    $apellido = $_POST['Ape'];
    $direccion = $_POST['Dir'];

    $query = "INSERT INTO datos_usuarios (Nombre, Apellido, Direccion) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($query);
    $stmt->execute([$nombre, $apellido, $direccion]);

    header('Location: ../22.MVC_junto_18.CRUD\index.php');/*NOSE QUE OCURRE QUE SI NO LE PONGO LA RUTA RELATIVA DE ESTA FORMA ME DA ERROR*/ 
  // header('Location: ../index.php'); SI SE LO PONGO DE ESTA MANERA ME DA ERROR 
}

?>

