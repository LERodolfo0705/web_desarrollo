<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="" type="text/css">
    <title>Hola</title>
</head>

<body>

    <?php
    /*
    Rodolfo Loredo 5 PM
    12/10/2022
    */

    //accede al valor de la variable
    $name = $_POST['nombre'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];

    //Despliega el mensaje
    echo "Hola $name </br>";
    echo "Tu edad es $edad </br>";
    echo "Tu numero de teléfono es $telefono </br>";
    //Boton para regresar al formulario
    echo "<a href='greetingForm.html'>Regresar</a>";
    ?>
</body>
</html>