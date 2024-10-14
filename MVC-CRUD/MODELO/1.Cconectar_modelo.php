<?php
/*Contiene la clase para establecer la conexion con la base de datos (forma parte de la bbdd)
por lo que debe estar en la carpeta de modelos donde se gestionan las interacciones con la base de datos.
*/

class Cconectar_modelo
{
    //Creamos funcion estatica para no tener que instanciar el objeto para usar la funcion
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