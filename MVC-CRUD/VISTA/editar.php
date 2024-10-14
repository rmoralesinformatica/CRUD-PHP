<?php

include("../MODELO/1.Cconectar_modelo.php");

$conexion = Cconectar_modelo::conexion();

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];

    $sql = "UPDATE datos_usuarios SET Nombre=?, Apellido=?, Direccion=? WHERE Id=?";
    $stmt = $conexion->prepare($sql);
    $stmt->execute([$nombre, $apellido, $direccion, $id]);

    header("Location: ../index.php");
} else {
    $id = $_GET['ide'];
    $nombre = $_GET['nomb'];
    $apellido = $_GET['apell'];
    $direccion = $_GET['direc'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="../CONTROLADOR/Actualizar.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label>Nombre: <input type="text" name="nombre" value="<?php echo $nombre; ?>"></label><br>
    <label>Apellido: <input type="text" name="apellido" value="<?php echo $apellido; ?>"></label><br>
    <label>Dirección: <input type="text" name="direccion" value="<?php echo $direccion; ?>"></label><br>
    <input type="submit" name="update" value="Actualizar">
</form>

</body>
</html>
