<!DOCTYPE html>
<html lang="en">

<?php
    extract($_GET);
    const EDAT_MINIMA_BEBE = 0;
    const EDAT_MINIMA_XIQUET = 3;
    const EDAT_MINIMA_ADOLESCENT = 13;
    const EDAT_MINIMA_ADULT = 18;
    const EDAT_MINIMA_JUBILAT = 67;
?>

<head>
    <meta charset="UTF-8">
    <title>Etapa de la persona segons l'edat</title>
</head>
<body>
<?php
    if (isset($edat)) {
        if ($edat < EDAT_MINIMA_BEBE) {
            echo "Has posat una edat menor que zero";
        } else if ($edat < EDAT_MINIMA_XIQUET) {
            echo "ets un bebé";
        } else if ($edat < EDAT_MINIMA_ADOLESCENT) {
            echo "ets un xiquet";
        } else if ($edat < EDAT_MINIMA_ADULT) {
            echo "ets un adolescent";
        } else if ($edat < EDAT_MINIMA_JUBILAT) {
            echo "ets un adult";
        } else {
            echo "ets un jubilat";
        }
    } else {
        echo "Posa la teu edat actual a la variable edat pel QueryString";
    }
?>
</body>
</html>