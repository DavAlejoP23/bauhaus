<?php
// Conecta a la base de datos
$db = new mysqli('localhost', 'root', '', 'bauhaus');

// Verifica la conexión
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Selecciona todos los comentarios de la base de datos
$sql = "SELECT * FROM comments ORDER BY id DESC";
$result = $db->query($sql);

// Si hay comentarios, los muestra
if ($result->num_rows > 0) {
    // Itera sobre los comentarios
    while($row = $result->fetch_assoc()) { ?>
<div class='comment'>
    <h2 class="work"><?php echo $row['work']; ?></h2>
    <p class="comment-text"><?php echo $row['comment']; ?></p>
    <p class="author"><strong><?php echo $row['name']; ?></strong></p>
</div>
<?php }
} else {  ?>
<p>No hay comentarios.</p>
<?php }

// Cierra la conexión a la base de datos
$db->close();
?>