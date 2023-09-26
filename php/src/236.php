<!DOCTYPE html>
<html lang="en">

<?php
    extract($_POST);
?>

<head>
    <meta charset="UTF-8">
    <title>Formulari persones</title>
</head>
<body>
    <?php
        if (isset($quantitat)) {
            echo "<form action='237.php' method='post'>";
            for ($i = 1; $i <= $quantitat; $i++) {
                echo "Persona $i <br>";
                echo "<label for='nom$i'>Nom</label>";
                echo "<input id='nom$i' name='nom$i' type='text'><br>";

                echo "<label for='altura$i'>Altura</label>";
                echo "<input id='altura$i' name='altura$i' type='number' step='any'><br>";

                echo "<label for='email$i'>Email</label>";
                echo "<input id='email$i' name='email$i' type='email'><br><br>";
            }
            echo "<input type='submit' value='submit'>";
            echo "</form>";
        } else {
            echo "Posa el número de persones en el QueryString";
        }
    ?>
</body>
</html>