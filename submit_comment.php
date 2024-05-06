<?php
// Conecta a la base de datos
$db = new mysqli('localhost', 'root', '', 'bauhaus_comments');

// Verifica la conexión
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Prepara la consulta SQL para insertar el comentario
$stmt = $db->prepare("INSERT INTO comments (name, work, comment) VALUES (?, ?, ?)");

// Vincula los parámetros a la consulta SQL
$stmt->bind_param("sss", $_POST['name'], $_POST['work'], $_POST['comment']);

// Ejecuta la consulta
$stmt->execute();

// Cierra la conexión a la base de datos
$db->close();
?>