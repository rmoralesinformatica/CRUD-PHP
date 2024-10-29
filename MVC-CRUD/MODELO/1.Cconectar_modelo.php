<?php
class Cconectar_modelo
{
    public static function conexion()
    {
        try {
            $conexion = new PDO('mysql:host=localhost;port=3307;dbname=pruebas', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET UTF8");
        } catch (Exception $e) {
            die("Error" . $e->getMessage());
            echo "Error en la linea: " . $e->getLine();
        }
        return $conexion;
    }
}
?>
