<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
    $nombre = "Ruben Elias";
    $primerApellido = "Ochialbi";
    $segundoApellido = "Nita";
    $email = "tecnoespecial100@gmail.com";
    $anyoDeNamcimiento = 2003;
    $telefono = 642084810;
?>
<table class="informacionAlumno">
    <tr>
        <td>Nom</td>
        <td><?php echo $nombre?></td>
    </tr>
    <tr>
        <td>Cognoms</td>
        <td><?php echo $primerApellido." ".$segundoApellido?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $email?></td>
    </tr>
    <tr>
        <td>Natalici</td>
        <td><?php echo $anyoDeNamcimiento?></td>
    </tr>
    <tr>
        <td>Telèfon</td>
        <td><?php echo $telefono?></td>
    </tr>
</table>
</body>
</html>