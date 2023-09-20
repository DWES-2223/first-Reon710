<!DOCTYPE html>
<html lang="en">

<?php
    extract($_GET);
    const MAXIM_HORA = 24;
    const MAXIM_MINUT = 60;
    const MAXIM_SEGON = 60;
?>

<head>
    <meta charset="UTF-8">
    <title>¿Qué hora es?</title>
</head>

<body>
<?php
    if (isset($hora,$minut,$segon)) {
        $segon++;
        if ($segon === MAXIM_SEGON) {
            $segon = 0;
            $minut++;
            if ($minut === MAXIM_MINUT) {
                $minut = 0;
                $hora++;
                if ($hora === MAXIM_HORA) {
                    $hora = 0;
                }
            }
        }
        echo "${hora}:${minut}:${segon}";
    } else {
        echo "Posa les variables hora, minut i segon pel QueryString";
    }
?>
</body>
</html>