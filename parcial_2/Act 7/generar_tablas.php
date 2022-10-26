<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de tablas</title>
</head>
<body>
<form action="generar_tablas.php" method="get">
    <h1>Generador de tablas</h1>
    Columna
    <input  type="number" name="col" id="col">
    Renglon
    <input  type="number" name="ren" id="ren">
    <input type="submit" value="Generar">
</form>
    <?php
    /*
    Rodolfo Loredo 5 PM
    21/10/2022
    */
    if($_GET) {
    $ren= $_GET['ren'];
    $col= $_GET['col'];
    if ($col&&$ren&&isset($_GET['ren'])) {
        echo "<center>";
        echo "<table align='center' border='1px'>";

        for($col=1; $col <=$_GET['col']; $col++) {
            echo"<tr>";
            for($ren=1; $ren <= $_GET['ren']; $ren++) {
                echo "<td>";
            echo "$col$ren";
            echo "</td>";
            }
            echo "<tr>";
        }
    }
    echo "</table>";
    echo "</center>";
}
    ?>
</body>
</html>