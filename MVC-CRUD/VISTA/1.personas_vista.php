<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1.personas_vista.php</title>

</head>

<body>

  <?php
  

  require("MODELO/3.paginacion.php")
  ?>
 
  <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
    <table width="50%" border="0" align="center">
      <tr><!--1º FILA CON EL NOMBRE DE LAS COLUMNAS DE CADA REGISTRO (FONDO AMARILLO)-->
        <td class="primera_fila">Id</td>
        <td class="primera_fila">Nombre</td>
        <td class="primera_fila">Apellido</td>
        <td class="primera_fila">Dirección</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr>

      <!--PASO 2 recorrer el array  (POR CADA REGISTRO CREA UNA FILA NUEVA (TR NUEVO) -->
      <?php
      foreach ($matrizPersonas as $valor) //por cada objeto dentro del array CREA UNA FILA NUEVA
        : ?> <!--(IMPORTANTE LOS 2 PUNTOS)Se cierra el php 
      para poder anadir otra etiqueta de FIN DEL FOREACH ABAJO-->

        <tr>
          <!-- 3º PASO Se añade en los php cada propiedad en el mismo orden que en la bbdd y escrito igual-->
          <!----AL SER UN ARRAY SE MODIFICA EN MVC SE CAMBIA LA PROPIEDAD POR LA POSICION DEL ARRAY  --->
          <td> <?php echo $valor["id"] ?> </td>
          <td> <?php echo $valor["Nombre"] ?></td>
          <td> <?php echo $valor["Apellido"] ?></td>
          <td> <?php echo $valor["Direccion"] ?></td>

          <!--TODO LO QUE SE MANDA POR UNA ETIQUETA 'a' SE MANDA SIEMPRE POR GET AUTOMATICAMENTE-->

          <!---4º PASO Se añade la etiqueta a en el boton de borrar 
                       <a hacia borrar.php pasandole :
                        ? y el nombreParametroTransferir =
                        etiqueta php echo $valor->id?-->
          <td class="bot"><a href="./CONTROLADOR/Borrar.php?id=<?php echo $valor['id'] ?>">
              <input type='button' name='del' id='del' value='Borrar'></td></a><!--Cierras etiqueta </a>--->

          <!---5º PASO Se añade la etiqueta a en el boton de actualizar con todos los parametros de la variable $valor-->
          <td class='bot'>
            <a href="VISTA/editar.php?ide=<?php echo $valor['id'] ?> 
        & nomb=<?php echo $valor['Nombre'] ?>
        & apell=<?php echo $valor['Apellido'] ?>
        & direc=<?php echo $valor['Direccion'] ?>">
              <input type='button' name='up' id='up' value='Actualizar'></a>
          </td>
        </tr>
        <!-- CONTINUACION DEL PASO 2 Al añadir endForeach
  se REPITE  lo que haya ENTRE principio de la etiqueeta forEach 
  y del finalForEach hasta recorrer toda la array-->
      <?php
      endforeach;
      ?>
      <tr><!---ULTIMA FILA PARA INSERTAR DATOS -->
        <td></td>
        <td><input type='text' name='Nom' size='10' class='centrado' value='<?php echo isset($_GET["nomb"]) ? $_GET["nomb"] : ""; ?>'></td>
        <td><input type='text' name='Ape' size='10' class='centrado' value='<?php echo isset($_GET["apell"]) ? $_GET["apell"] : ""; ?>'></td>
        <td><input type='text' name='Dir' size='10' class='centrado' value='<?php echo isset($_GET["direc"]) ? $_GET["direc"] : ""; ?>'></td>
        <td class='bot'>
          <input type='hidden' name='id' value='<?php echo isset($_GET["ide"]) ? $_GET["ide"] : ""; ?>'>
          <input type='submit' name='<?php echo isset($_GET["ide"]) ? "actualizar" : "insertar"; ?>' value='<?php echo isset($_GET["ide"]) ? "Actualizar" : "Insertar"; ?>'>
        </td>
      </tr>


      <!---<tr><!---ULTIMA FILA PARA INSERTAR DATOS (FIJATE EN EL NAME PARA PASAR LOS DATOS A LA BBDD )
        <td></td>
        <td><input type='text' name='Nom' size='10' class='centrado'></td>
        <td><input type='text' name='Ape' size='10' class='centrado'></td>
        <td><input type='text' name=' Dir' size='10' class='centrado'></td>
        <td class='bot'><input type='submit' name='insertar' id='insertar' value='Insertar'></td>
      </tr>---->
      <tr>
        <td colspan="4" class="centrado">
          <?php
          //---------------------------------------------------------------PAGINACION------------------------------------------------------------------------------------------
          for ($i = 1; $i <= $total_pag; $i++) {
            // ?pag=: El ? indica el comienzo de una cadena de consulta en la URL, y pag es el parámetro que se está pasando con un valor que varía según el valor de $i.
            echo "<a href='?pag=" . $i . "'> " . $i . "</a> ";
          }   //Muestra el valor que tiene $i por pantalla agregandole espacios delante 

          ?>
        </td>


      </tr>
    </table>
  </form>
  </table>
</body>

</html>