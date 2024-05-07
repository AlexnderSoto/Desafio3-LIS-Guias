<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP - Operadores de comparacion</title>
    <style>
        body{
            font-family: "Arial Black";
        }
    </style>
</head>
<body>
    <?php
    $a = 8;
    $b = 3;
    $c = 3;
    echo $a == $b, "<br>";
    echo $a != $b, "<br>";
    echo $a < $b, "<br>";
    echo $a > $b, "<br>";
    echo $a >= $c, "<br>";
    echo $b <= $c, "<br>"; 
    ?>
</body>
</html>