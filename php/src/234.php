<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alçada</title>
</head>
<body>
<table>
    <?php
        $alturasPersonas = ["KOKE" => 1.82,"PEPE" => 1.50,"MENGANITO" => 2,"FULANITO" => 1.67,"MARIA" => 1.56];
        $alturaMitjana = 0;
        echo "<thead> <tr> <th>Nom</th> <th>Alçada</th> </tr> </thead>";
        foreach ($alturasPersonas as $persona => $altura) {
            echo "<tr> <td>$persona</td> <td>$altura</td> </tr>";
            $alturaMitjana += $altura;
        }
        $alturaMitjana /= sizeof($alturasPersonas);
        echo "<tr> <td>Altura media</td> <td>$alturaMitjana</td> </tr>";
    ?>
</table>
</body>
</html>