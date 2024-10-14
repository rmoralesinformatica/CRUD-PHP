<?php

/*
Este archivo maneja la lógica de obtención de datos relacionados con los usuarios. 
Debe estar en la carpeta de modelos porque trabaja con datos de la base de datos.

*/
class Cpersonas_modelo
{
  private $db; //para almacenar la conexion
  private $personas; // para almacenar los productos de la tabla productos

  public function __construct()
  {
    require_once("MODELO/1.Cconectar_modelo.php"); //ejecuta el archivo solo 1 vez (distinto a require [varias veces] y distinto a include(sigue con el codigo y solo hace un warning))

    //Para conectar , llamar a la funcion estatica de la clase Cconectar_modelo
    $this->db = Cconectar_modelo::conexion();

    $this->personas = array();
  }
  public function getPersonas()
  {
    require("3.paginacion.php"); //se añade el archivo paginacion para poner las variables que hacen de limite en la consulta
    //variable que conecta la base de datos con la query(consulta)
    $consulta = $this->db->query("SELECT * FROM datos_usuarios LIMIT $empezar_desde,$tamano_pag");

    //Recorre las filas de la consulta mediante el fetch e indicando que es un array asociativo (no indexado) y se guarda cada fila en $filas 
    while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {

      //Almacenar cada registro en el array productos [pasas el contenido del array $consulta a el array vacio productos]
      $this->personas[] = $filas;
    }
    return $this->personas; //me devuelve el array entero

  }
}
