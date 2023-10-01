<!DOCTYPE html>
<html lang="en">

<?php
    include 'atletes.php';
    include '270a.php';
    global $records;
    extract($_POST);
?>

<head>
    <meta charset="UTF-8">
    <title>Taula Atletes</title>
</head>
<body>
    <?php
        $prova = $_POST["prova"];
        if (array_key_exists($prova,$records)) {
            $records[$prova] = array(
                "marca" => $marca,
                "atleta" => $atleta,
                "natalici" => $natalici,
                "club" => $club,
                "data" => $data,
                "lloc" => $lloc
            );
            $phpCode = '<?php $records = ' . var_export($records, true) . ';';
            file_put_contents('atletes.php', $phpCode);
        } else {
            echo "La prova $prova no existeix en la llista de records oficials de la FEA";
        }
    ?>
</body>
</html>