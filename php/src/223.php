<!DOCTYPE html>
<html lang="en">

<?php
extract($_GET);
?>

<head>
    <meta charset="UTF-8">
    <title>Tabla de multiplicar</title>
</head>
<body>
<table>
<thead>
<tr>
    <td>a</td>
    <td>*</td>
    <td>b</td>
    <td>=</td>
    <td>a*b</td><br>
</tr>
</thead>
<tbody>
<?php
if (isset($nombre)) {
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $nombre * $i;
        echo "<tr>
                <td>$nombre</td>
                <td>*</td>
                <td>$i</td>
                <td>=</td>
                <td>$resultado</td>
                </tr>";
    }
} else {
    echo "Posa el nombre pel QueryString";
}
?>
</tbody>
</table>
</body>
</html>