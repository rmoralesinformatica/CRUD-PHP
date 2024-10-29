<?php 
require_once("1.Cconectar_modelo.php");
$conexion = Cconectar_modelo::conexion(); //llamamos a la clase y a su funcion 
  $tamano_pag = 3;  // Registros que se van a mostrar 
  $pagina = 1;
  if (isset($_GET['pag'])) {
    $pagina = $_GET['pag'];
  }

  $empezar_desde = ($pagina - 1) * $tamano_pag;  // Almacena el registro por donde quiero empezar
  $consulta_total =  "SELECT * FROM datos_usuarios"; //Devuelve todo lo que hay en esta tabla
  $prepare = $conexion->prepare($consulta_total);  // Preparación de la consulta
  $prepare->execute(array());  // Ejecución de la consulta
  $num_filas = $prepare->rowCount();  // Cantidad de filas o de registros que nos devuelve la consulta 
  $total_pag = ceil($num_filas / $tamano_pag);  // Número total de páginas, redondeado hacia arriba con ceil

?>
