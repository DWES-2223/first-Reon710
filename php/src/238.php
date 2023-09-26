<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array chungo</title>
</head>
<body>
    <?php
        const NUMERO_FILAS = 6;
        const NUMERO_COLUMNAS = 9;
        const NUMERO_MINIMO = 100;
        const NUMERO_MAXIMO = 999;
        $arrayBidimensional = array();

        for ($i = 0; $i < NUMERO_FILAS; $i++) {
            $arrayNormal = array();
            for ($j = 0; $j < NUMERO_COLUMNAS; $j++) {
                while (true) {
                    $numeroAleatorio = rand(NUMERO_MINIMO,NUMERO_MAXIMO);
                    if (in_array($numeroAleatorio,$arrayBidimensional)) {
                        $arrayNormal[] = $numeroAleatorio;
                        break;
                    }
                }
            }
            $arrayBidimensional[] = $arrayNormal;
        }

        for ($k = 0; $k < NUMERO_FILAS; $k++) {
            for ($l = 0; $l < NUMERO_COLUMNAS; $l++) {

            }
        }
    ?>
</body>
</html>