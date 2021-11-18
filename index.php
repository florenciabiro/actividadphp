<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Actividad PO</title>
</head>
<body>
    
<?php
$datos=["Florencia", "Biro","40","Watercolor","VS CODE","Windows"];
echo "<h1 class= titulo >".$datos[0]." ".$datos[1]."</h1>";


echo "<h2> Edad: ".$datos[2]."<br>";
echo "Hobbie: ".$datos[3]."<br>";
echo "Mi editor de codigo preferido es: ".$datos[4]."<br>";
echo "OS usado : ".$datos[5]."</h2>";



?>

</body>
</html>