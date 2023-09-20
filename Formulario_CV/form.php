<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;700;800&family=Quicksand&display=swap" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
    <title>Registro</title>
</head>
<body>
    <?php
    $NOMBRE=$_POST['nombre'];
    echo 'Los datos de '.$NOMBRE.' han sido registrados correctamente.'
    ?>
    <a href="index.html">Regresar</a>
</body>
</html>