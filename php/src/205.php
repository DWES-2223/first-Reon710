<!DOCTYPE html>
<html lang="en">

<?php
    extract($_GET);
    $bitlletsDescomposicio = [500, 200, 100, 50, 20, 10, 5, 2, 1];
?>

<head>
    <meta charset="UTF-8">
    <title>Diners</title>
</head>
<body>
    <?php
        if (isset($quantitat)) {
            foreach ($bitlletsDescomposicio as $bitllet) {
                if ($bitllet <= $quantitat) {
                    $numeroBitllets = intdiv($quantitat, $bitllet);
                    $quantitatRecaudada = $bitllet * $numeroBitllets;
                    $tipusBitllet = ($numeroBitllets > 1) ? (($bitllet > 2) ? "bitllets" : "monedes") :
                        (($bitllet > 2) ? "bitllet" : "moneda");
                    echo "$numeroBitllets $tipusBitllet de $bitllet <br>";
                    $quantitat -= $quantitatRecaudada;
                }
            }
        } else {
            echo "Posa la quantitat a la variable quantitat pel QueryString";
        }
    ?>
</body>
</html>