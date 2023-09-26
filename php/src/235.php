<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array bidimensional</title>
</head>
<body>
<table>
    <?php
        $personas = [['nom'=>'Aitor', 'altura'=>182, 'email'=>'aitor@correo.com'],
            ['nom'=>'Koke', 'altura'=>185, 'email'=>'koke@correo.com'],
            ['nom'=>'Arthur', 'altura'=>195, 'email'=>'arthur@correo.com'],
            ['nom'=>'Fulanito', 'altura'=>170, 'email'=>'fulanito@correo.com'],
            ['nom'=>'Menganito', 'altura'=>165, 'email'=>'menganito@correo.com'],];

        echo "<thead> <tr> <th>Nom</th> <th>Alçada</th> <th>Email</th> </tr> </thead>";
        foreach ($personas as $persona) {
            echo "<tr>";
            foreach ($persona as $atributoPersona => $valorAtributo) {
                echo "$valorAtributo";
            }
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>