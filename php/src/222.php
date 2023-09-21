<!DOCTYPE html>
<html lang="en">

<?php
    extract($_GET);
?>

<head>
    <meta charset="UTF-8">
    <title>Poténcia</title>
</head>
<body>
<?php
    if (isset($base,$exponent)) {
        $potencia = 1;
        for ($i = 0; $i < $exponent; $i++) {
            $potencia *= $base;
        }
        echo "$base^$exponent = $potencia";
    } else {
        echo "Posa la base i l'exponent a les variables base i exponent pel QueryString";
    }
?>
</body>
</html>