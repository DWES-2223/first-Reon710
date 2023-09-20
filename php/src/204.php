<!DOCTYPE html>
<html lang="en">
<?php
    extract($_GET);
    $anyActual = date("Y");
    const ANY_JUBILACIO = 67;
?>
<head>
    <meta charset="UTF-8">
    <title>Edad</title>
</head>
<body>
    <?php
        if (isset($edat)) {
            echo $edat - 10 . "<br>";
            echo $edat + 10 . "<br>";
            if ($edat >= ANY_JUBILACIO) {
                $anyJubilacio = ($edat - ANY_JUBILACIO) - $anyActual;
            } else {
                $anyJubilacio = (ANY_JUBILACIO - $edat) + $anyActual;
            }
            echo $anyJubilacio;
        } else {
            echo "Posa la teu edat actual a la variable edat pel QueryString";
        }
    ?>
</body>
</html>