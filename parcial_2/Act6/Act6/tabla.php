<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="." type="text/css">
    <title>Hola</title>
</head>
<body>
    <?php
    $tabla = $_POST['tabla'];
    echo "<h1>Tabla de multiplicar de $tabla</h1>";
    echo "<br>";
    for ($i=1; $i <=10 ; $i++){
        echo "$i x $tabla = ", $i*$tabla, "<br>";
    }
    echo "<br>";
    echo "<a href='tabla.html'>Regresar</a>";
    ?>

</body>
</html>