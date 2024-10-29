<?php
class Cpersonas_modelo
{
  private $db; //para almacenar la conexion
  private $personas; // para almacenar los productos de la tabla productos

  public function __construct()
  {
    require_once("MODELO/1.Cconectar_modelo.php"); //ejecuta el archivo solo 1 vez (distinto a require [varias veces] y distinto a include(sigue con el codigo y solo hace un warning))

    $this->db = Cconectar_modelo::conexion();

    $this->personas = array();
  }
  public function getPersonas()
  {
    require("3.paginacion.php"); //se añade el archivo paginacion para poner las variables que hacen de limite en la consulta

    $consulta = $this->db->query("SELECT * FROM datos_usuarios LIMIT $empezar_desde,$tamano_pag");

    while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {

      $this->personas[] = $filas;
    }
    return $this->personas; //me devuelve el array entero

  }
}
