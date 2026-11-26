<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<?php, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$conexion = mysqli_connect("localhost", "root", "", "bdcomentarios")
    or die("Problemas con la conexión");

mysqli_query($conexion,
    "INSERT INTO tablacomentarios(NOMBRE,MAIL,CURSO)
    VALUES(
    '$_REQUEST[nombre]',
    '$_REQUEST[mail]',
    '$_REQUEST[curso]'
    )")
    or die("Problemas en el INSERT: " . mysqli_error($conexion));

mysqli_close($conexion);

echo "Registro Exitoso";

?>

</body>
</html>