<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Números aleatoris</title>
</head>
<body>
    <?php
        const NUMERO_MINIM = 0;
        const NUMERO_MAXIM = 99;

        $numerosAleatoris = array();
        for ($i = 0; $i < NUMERO_MAXIM; $i++) {
            $numerosAleatoris[] = rand(NUMERO_MINIM,NUMERO_MAXIM);
        }
        echo "<ul> ";
        foreach ($numerosAleatoris as $numero) {
            echo "<li>$numero</li> ";
        }
        echo "</ul>";
    ?>
</body>
</html>