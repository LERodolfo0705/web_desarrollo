<!DOCTYPE html>
<html lang="en">
<!--
    RODOLFO LOREDO ESTRADA 5 PM
    21/10/22
-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_dias.css" type="text/css">
    <title>Días Vividos</title>
</head>

<body>
    <h1>Programa que calcula los días vividos</h1>
    <hr>
    <h3>Ingresa tu edad:</h3>
    <form action="dias_vividos.php" method="get">
        <input type="number" name="edad" id="edad" min='0' max='120'>
        <br><br>
        <input type="submit" value="Calcular los dias vividos">
    </form>

    <?php
    /*
    Rodolfo Loredo 5 PM
    21/10/2022
    */
    $edad = $_GET['edad'];
    if (isset($_GET['edad'])) {
        $edad = $edad * 365;
        echo "<h3 style='text-align:center;'>Los días vividos son $edad</h3>";
    }
    ?>
    <br>
</body>

</html>