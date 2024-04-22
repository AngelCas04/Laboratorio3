<?php
// Conectar a la base de datos SQLite
$db = new SQLite3('db/lab3.db');

// Obtener el ID del usuario a editar
$id = $_GET['id'];

// Recuperar los datos del usuario a editar
$sql = "SELECT * FROM users WHERE id = $id";
$result = $db->query($sql);
$row = $result->fetchArray(SQLITE3_ASSOC);

// Verificar si se encontró el usuario
if ($row) {
    // Si se envió el formulario de edición
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];

        // Actualizar los datos del usuario en la base de datos
        $sql = "UPDATE users SET username = '$username', name = '$name', password = '$password' WHERE id = $id";
        $result = $db->exec($sql);

        // Verificar si la actualización fue exitosa
        if ($result) {
            // Redireccionar a la página principal del dashboard (index.php)
            header('Location: index.php');
            exit;
        } else {
            echo 'Error al actualizar el usuario.';
        }
    }
} else {
    echo 'Usuario no encontrado.';
}
?>

<!-- Formulario para editar usuario -->
<h2>Editar usuario</h2>
<form action="editar.php?id=<?php echo $id; ?>" method="post">
    <label for="username">Nombre de usuario:</label>
    <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>" required>
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" value="<?php echo $row['password']; ?>" required>
    <input type="submit" value="Guardar cambios">
</form>