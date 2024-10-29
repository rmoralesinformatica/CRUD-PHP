<?php
    require_once("MODELO/2.Cpersonas_modelo.php"); 

    $persona = new Cpersonas_modelo();
  
    $matrizPersonas = $persona->getPersonas();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["insertar"])) {
            require_once("CONTROLADOR/Insertar.php");
        } elseif (isset($_POST["actualizar"])) {
            require_once("CONTROLADOR/Actualizar.php");
        }
    }

    require_once("VISTA/1.personas_vista.php"); 
