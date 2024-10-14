# CRUD-PHP
MVC
# CRUD con Paginación en PHP (MVC + PDO)

>Este proyecto es un CRUD (Crear, Leer, Actualizar, Eliminar) desarrollado utilizando PHP en su versión 8.x, empleando PDO para la conexión a la base de datos y aplicando el patrón de diseño Modelo-Vista-Controlador (MVC). Además, cuenta con funcionalidad de paginación para gestionar la visualización de registros.

## Características del Proyecto

1. CRUD completo (Crear, Leer, Actualizar, Eliminar).
2. Implementación de paginación para optimizar la presentación de datos.
3. Conexión a la base de datos utilizando PDO (PHP Data Objects), lo que permite una capa de abstracción para la interacción con la base de datos.
4. Estructura basada en el patrón de diseño MVC para una mejor organización y mantenimiento del código.

## Base de Datos

> La base de datos utilizada es MySQL, creada en un entorno de servidor local (localhost), conectado a través del puerto 3307. La base de datos se llama pruebas y contiene una tabla llamada datos_usuarios con los siguientes campos:

-  id (INT, AUTO_INCREMENT, PRIMARY KEY)
-  Nombre (VARCHAR)
- Apellido (VARCHAR)
- Direccion (VARCHAR)

## Requisitos

- PHP 8.x
- MySQL (u otra base de datos compatible con PDO)
- Servidor local (XAMPP, WAMP o similar) configurado en el puerto 3307 para MySQL.

# Configuración del Proyecto

1. Clona este repositorio en tu servidor local.

2. Asegúrate de tener un servidor local (como XAMPP o WAMP) corriendo en localhost:3307.

3. Crea la base de datos pruebas y ejecuta las consultas SQL para crear la tabla datos_usuarios.

4. Configura las credenciales de conexión en el archivo de configuración del proyecto (por ejemplo, en el archivo config.php):
    
``` php
    $conexion = new PDO('mysql:host=localhost;dbname=pruebas;port=3307', 'root', '');
``` 

> Accede a la aplicación a través de tu navegador para realizar operaciones de CRUD con paginación.

# Uso

> Puedes navegar a la aplicación para:

- Añadir un nuevo usuario.
- Ver la lista de usuarios con opción de paginación.
- Editar y actualizar registros existentes.
- Eliminar usuarios de la base de datos.
