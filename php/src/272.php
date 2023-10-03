<!DOCTYPE html>
<html lang="en">

<?php
    include 'functions272.php';
    include 'atletes.php';
    global $records;
?>

<head>
    <meta charset="UTF-8">
    <title>Records</title>
</head>
<body>
    <?php
        $recordMasAntiguo = vell($records);
        $atletaLaureado = laureado($records);
        $atletaMasJoven = jove($records);

        echo "Record més antic: ".vell($records)."<br>";
        echo "Club amb més títols: ".laureado($records)['club']."<br>";
        echo "Persona amb més records: ".laureado($records)['atleta']."<br>";
        echo "Ciutat més propicia: ".laureado($records)['lloc']."<br>";
        echo "Mes jove en aconseguir el record: ".$atletaMasJoven['atleta']." - ".$atletaMasJoven['edad']." anys<br>";
        include '270.php';
    ?>
</body>
</html>