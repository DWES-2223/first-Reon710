<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numeros aleatoris - Major, Menor, Mediana</title>
</head>
<body>
<?php
const NUMERO_MINIM = 0;
const NUMERO_MAXIM = 100;
const GRANDARIA_ARRAY = 33;

$numerosAleatoris = array();
for ($i = 0; $i < GRANDARIA_ARRAY; $i++) {
    $numerosAleatoris[] = rand(NUMERO_MINIM,NUMERO_MAXIM);
}
$major = 0;
$menor = $numerosAleatoris[0];
$mitjana = 0;
foreach ($numerosAleatoris as $numero) {
    if ($numero > $major) {
        $major = $numero;
    }
    if ($numero < $menor) {
        $menor = $numero;
    }
    $mitjana += $numero;
}
$mitjana /= sizeof($numerosAleatoris);
echo "El major es ${major}, el menor es ${menor} i la mitjana es ".number_format($mitjana,2);
?>
</body>
</html>