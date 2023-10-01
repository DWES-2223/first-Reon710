<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $productos = array();
        $i = 1;
        while (true) {
            if (isset($_POST["nom$i"], $_POST["cost$i"])) {
                $producto = array(
                    "nom" => $_POST["nom$i"],
                    "cost" => $_POST["cost$i"],
                );
                $productos[] = $producto;
                $i++;
            } else {
                break;
            }
        }
        echo "<table>";
        echo "<thead><td>Nom</td><td>Cost</td></thead>";
        foreach ($productos as $producto) {
            echo "<tr>";
            foreach ($producto as $atributo => $valor) {
                echo "<td>$valor</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>