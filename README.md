 Proyecto: Gestor de Usuarios PHP con  SQLite
Este proyecto consiste en un gestor básico de usuarios desarrollado en PHP utilizando una base de datos SQLite. 
Permite la visualización de usuarios almacenados en la base de datos, así como la capacidad de editar y eliminar usuarios.


Requisitos:
Servidor web con soporte para PHP.
Extensión SQLite habilitada en PHP.

Base de Datos:

El archivo database.db contiene la base de datos SQLite. Asegúrate de que el servidor web tenga permisos de escritura en la ubicación donde se encuentra este archivo.
Plantilla HTML:
El diseño de la interfaz se basa en una plantilla HTML ubicada en template.html. Puedes personalizar esta plantilla según tus necesidades de diseño.
 
Funcionamiento:

  Visualización de Usuarios:
Al ejecutar el proyecto, se recuperan los usuarios de la base de datos y se muestran en una tabla HTML.
Cada fila de la tabla muestra la información de un usuario, incluido su ID, nombre de usuario, nombre y contraseña.
  Edición de Usuarios:
Para editar un usuario, haz clic en el enlace "Editar" correspondiente a ese usuario. Esto te dirigirá a la página editar.php, donde puedes realizar cambios en la información del usuario.
  Eliminación de Usuarios:
Para eliminar un usuario, haz clic en el enlace "Eliminar" correspondiente a ese usuario. Esto eliminará permanentemente el usuario de la base de datos.
  Estructura del Código:
index.php: Este archivo se encarga de conectar con la base de datos SQLite, recuperar los datos de los usuarios y generar el código HTML para mostrar los usuarios en la interfaz.
template.html: Plantilla HTML que define la estructura de la página. La variable {% for user in users %} se reemplaza con el código HTML generado dinámicamente para mostrar los usuarios.
editar.php y eliminar.php: Estos archivos se encargan de procesar las solicitudes de edición y eliminación de usuarios, respectivamente.
