<?php
$page = $_GET['page'] ?? 'inicio';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyecto Agua Pluvial</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<main>
    <?php
    $ruta = "$page.php";
    if (file_exists($ruta)) {
        include $ruta;
    } else {
        include "error.php";
    }
    ?>
</main>
</body>
</html>
