<!DOCTYPE html>
<html lang="en">

<?php
    include_once('atletes.php');
    global $records;
?>

<head>
    <meta charset="UTF-8">
    <title>Taula Atletes</title>
</head>
<body>
<table>
    <!-- Capçalera de la taula --> <tr><th>Prova</th>
        <th>Marca</th>
        <th>Atleta</th>
        <th>Natalici</th>
        <th>Club</th>
        <th>Data</th>
        <th>Lloc</th></tr>
    <?php foreach ($records as $prueba => $datos): ?>
        <!-- Cos de la taula --> <tr><td><?php echo $prueba; ?></td>
            <?php foreach ($datos as $valor): ?>
                <td><?php echo $valor;?></td>
            <?php endforeach;?>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>