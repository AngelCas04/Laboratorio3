<?php

// Conectar a la base de datos SQLite
$db = new SQLite3('db/lab3.db');

// Recuperar los datos de los usuarios
$sql = 'SELECT * FROM users';
$result = $db->query($sql);

// Generar el código HTML
$html = '';

while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $id = $row['id'];
    $username = $row['username'];
    $name = $row['name'];
    $password = $row['password'];

    $html .= '<tr>';
    $html .= '<td>' . $id . '</td>';
    $html .= '<td>' . $username . '</td>';
    $html .= '<td>' . $name . '</td>';
    $html .= '<td>' . $password . '</td>';
    $html .= '<td><a href="editar.php?id=' . $id . '">Editar</a></td>';
    $html .= '<td><a href="eliminar.php?id=' . $id . '">Eliminar</a></td>';
    $html .= '</tr>';
}

// Insertar el código HTML en la plantilla
$template = file_get_contents('template.html');
$template = str_replace('{% for user in users %}', $html, $template);
echo $template;
