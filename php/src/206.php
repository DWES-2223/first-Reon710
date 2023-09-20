<!DOCTYPE html>
<html lang="en">

<?php
    extract($_GET);
    const NUMERO_NEUTRAL = 0;
?>

<head>
    <meta charset="UTF-8">
    <title>Numero P-N-Z</title>
</head>
<body>
    <?php
        if (isset($numero)) {
            $tip = $numero <=> NUMERO_NEUTRAL;
            $tipusNumero = ($tip <= NUMERO_NEUTRAL) ? (($tip < NUMERO_NEUTRAL) ? "negatiu" : "zero") : "positiu";
            echo "El número $numero és $tipusNumero";
        } else {
            echo "Posa el numero a comprobar a la variable numero del QueryString";
        }
    ?>
</body>
</html>