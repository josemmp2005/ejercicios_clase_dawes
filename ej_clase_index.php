<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de Clase</title>
</head>
<body>

<h1>Ejercicios de Clase</h1>

<?php
    include('../conf/conf.php');
    
    foreach ($aEj as $unidad => $temas) {
        echo "<h3><a href='$unidad/{$unidad}_index.php'>$unidad</a></h3>";
    }
?>

</body>
</html>
