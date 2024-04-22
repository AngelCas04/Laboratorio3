<?php
// Conectar a la base de datos SQLite
$db = new SQLite3('db/lab3.db');

// Obtener los datos del formulario
$username = $_POST['username'];
$name = $_POST['name'];
$password = $_POST['password'];

// Insertar el nuevo usuario en la base de datos
$sql = "INSERT INTO users (username, name, password) VALUES ('$username', '$name', '$password')";
$result = $db->exec($sql);

// Verificar si la inserción fue exitosa
if ($result) {
    // Redireccionar a la página principal del dashboard (index.php)
    header('Location: index.php');
} else {
    // Mostrar un mensaje de error
    echo 'Error al agregar el usuario.';
}
?>