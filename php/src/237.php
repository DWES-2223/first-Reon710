<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Datos personas</title>
</head>
<body>
    <?php
        $datos = array();
        $i = 1;
        while (true) {
            if (isset($_POST["nom$i"], $_POST["altura$i"], $_POST["email$i"])) {
                $persona = array(
                        "nom" => $_POST["nom$i"],
                        "altura" => $_POST["altura$i"],
                        "email" => $_POST["email$i"],
                );
                $datos[] = $persona;
                $i++;
            } else {
                break;
            }
        }
        $alturaMayor = PHP_INT_MIN;
        $alturaMenor = PHP_INT_MAX;
        foreach ($datos as $persona) {
            $alturaMayor = ($persona['altura'] > $alturaMayor) ? $persona['altura'] : $alturaMayor;
            $alturaMenor = ($persona['altura'] < $alturaMenor) ? $persona['altura'] : $alturaMenor;
        }
        echo "<table>";
        echo "<thead>Datos personas</thead>";
        $numeroPersona = 1;
        foreach ($datos as $persona) {
            $destacado = ($persona['altura'] === $alturaMayor || $persona['altura'] === $alturaMenor) ? "<strong>" : "";
            $destacadoCierre = ($persona['altura'] === $alturaMayor || $persona['altura'] === $alturaMenor) ? "</strong>" : "";
            echo "<tr>";
            echo "<td>${destacado}${numeroPersona}.${destacadoCierre}</td>";
            foreach ($persona as $atributo => $valor) {
                echo "<td>${destacado}$atributo${destacadoCierre} => </td> <td>${destacado}$valor${destacadoCierre} | </td>";
            }
            echo "</tr>";
            $numeroPersona++;
        }
        echo "</table>";
    ?>
</body>
</html>