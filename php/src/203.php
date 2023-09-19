<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$nom = $_POST["nom"];
$cognom1 = $_POST["cognom1"];
$cognom2 = $_POST["cognom2"];
$email = $_POST["email"];
$any = $_POST["any"];
$telefon = $_POST["telefon"];
?>
<table>
    <tr>
        <td>Nom</td>
        <td><?php echo $nom?></td>
    </tr>
    <tr>
        <td>Cognoms</td>
        <td><?php echo $cognom1." ".$cognom2?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $email?></td>
    </tr>
    <tr>
        <td>Natalici</td>
        <td><?php echo $any?></td>
    </tr>
    <tr>
        <td>Telèfon</td>
        <td><?php echo $telefon?></td>
    </tr>
</table>
</body>
</html>