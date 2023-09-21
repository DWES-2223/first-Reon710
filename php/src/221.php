<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sumatorio</title>
</head>
<body>
<?php
    $totalSuma = 0;
for ($i = 1; $i <= 10 ; $i++) {
    $totalSuma += $i;
    echo $i;
    echo ($i===10) ? "=$totalSuma" : "+";
}
?>
</body>
</html>