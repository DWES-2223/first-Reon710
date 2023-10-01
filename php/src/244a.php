<!DOCTYPE html>
<html lang="en">

<?php
    extract($_GET);
?>

<head>
    <meta charset="UTF-8">
    <title>Productos leidos</title>
</head>
<body>
    <?php
        if (isset($quantitat)) {
            echo "<form action='244b.php' method='post'>";
            for ($i = 1; $i <= $quantitat; $i++) {
                echo "Persona $i <br>";
                echo "<label for='nom$i'>Nom</label>";
                echo "<input id='nom$i' name='nom$i' type='text'><br>";
                echo "<label for='cost$i'>Cost</label>";
                echo "<input id='cost$i' name='cost$i' type='number' step='any'><br>";
            }
            echo "<input type='submit' value='submit'>";
            echo "</form>";
        } else {
            echo "Dades incorrectes";
        }
    ?>
</body>
</html>