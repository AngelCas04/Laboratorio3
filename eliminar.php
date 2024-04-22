<?php

// Conectar a la base de datos SQLite
$db = new SQLite3('db/lab3.db');

// Obtener el ID del usuario a eliminar
$id = $_GET['id'];

// Eliminar el usuario de la base de datos
$sql = 'DELETE FROM users WHERE id = ' . $id;
$result = $db->exec($sql);

// Verificar si la eliminación fue exitosa
if ($result) {
    // Redireccionar a la página principal del dashboard (index.php)
    header('Location: index.php');
} else {
    // Mostrar un mensaje de error
    echo 'Error al eliminar el usuario.';
}
