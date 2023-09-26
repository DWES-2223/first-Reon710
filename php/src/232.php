<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>M i F</title>
</head>
<body>
<?php
    const M = 'M';
    const F = 'F';
    const NUMERO_ELEMENTOS = 100;
    $arrayMF = array();
for ($i = 0; $i < NUMERO_ELEMENTOS; $i++) {
    $aleatorio = rand(0,1);
    if ($aleatorio === 0) {
        $arrayMF[] = "M";
    } else {
        $arrayMF[] = "F";
    }
}
$arrayAsociativo = [];
$numeroM = 0;
$numeroF = 0;
foreach ($arrayMF as $letra) {
    if ($letra === M) {
        $numeroM++;
    } else {
        $numeroF++;
    }
}

echo "M => $numeroM F => $numeroF";
?>
</body>
</html>