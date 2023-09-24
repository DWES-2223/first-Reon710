<!DOCTYPE html>
<html lang="en">

<?php
extract($_POST);
?>

<head>
    <meta charset="UTF-8">
    <title>Formulari</title>
</head>
<body>
<form action="224.php" method="post">
    <?php
    if (isset($quantitat)) {
        for ($i = 0; $i < $quantitat; $i++) {
            echo "<label for='quantitat${i}'>quantitat${i}</label>
                    <input id='quantitat${i}' name='quantitats[]' type='number'><br>";
        }
        echo "<input type='submit' value='submit'>";
    } else if (isset($_POST['quantitats'])) {
        $quantitats = $_POST['quantitats'];
        $sumaQuantitats = 0;
        foreach ($quantitats as $quantitatSeleccionada) {
            $sumaQuantitats += $quantitatSeleccionada;
        }
        echo $sumaQuantitats;
    } else {
        echo "No hi ha cap valor anomenat quantitat o quantitats per al QueryString";
    }
    ?>
</form>
</body>
</html>
