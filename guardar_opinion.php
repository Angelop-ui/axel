<?php
$archivo = "opiniones.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["comentario"])) {
    $comentario = strip_tags(trim($_POST["comentario"]));
    $comentario .= "\n-------------------------\n";

    
    file_put_contents($archivo, $comentario, FILE_APPEND | LOCK_EX);
}

echo "<h2>Gracias por tu opinión</h2>";
echo "<h3>Opiniones anteriores:</h3>";

if (file_exists($archivo)) {
    $opiniones = file_get_contents($archivo);
    echo "<pre>" . htmlspecialchars($opiniones) . "</pre>";
} else {
    echo "<p>No hay opiniones aún.</p>";
}
?>
