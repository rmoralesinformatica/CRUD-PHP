<?php

include('../MODELO/1.Cconectar_modelo.php');

$conexion = Cconectar_modelo::conexion();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];


    var_dump($_POST);

    $sql = "UPDATE datos_usuarios SET Nombre=?, Apellido=?, Direccion=? WHERE Id=?";
    $stmt = $conexion->prepare($sql);

    // Verifica si la ejecución fue exitosa
    if ($stmt->execute([$nombre, $apellido, $direccion, $id])) {

        header("Location: ../index.php");
        
        exit(); 
    } else {
        echo "Error en la actualización";
    }
}
?>

