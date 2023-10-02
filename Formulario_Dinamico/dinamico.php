<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;700;800&family=Quicksand&display=swap" rel="stylesheet">
    <title>Registro de CV</title>
    <style>
        body {
            background: whitesmoke;
            font-family: 'Dosis', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }

        #respuesta {
            background: #fff;
            width: 35%;
            border-radius: 10px;
            box-shadow: 0 8px 20px 0 rgba(0,0,0,.15);
            padding: 40px;
            text-align: center;
            
        }

        .boton1 {
            font-family: 'Dosis', sans-serif;
            font-weight: 500;
            text-decoration: none;
            border: 1px solid #2d2f38;
            padding: 8px 8px;
            width: 40%;
            margin-bottom: 20px;
        }

        .boton1:hover {
            background: #2d2f38;
            color: #fff;
        }
    </style>
</head>
<body>
    <div id="respuesta">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $NOMBRE=$_POST['nombre'];
            $EXPERIENCIA=$_POST['experiencia'];
            $FORMACION=$_POST['formacion'];
            $IDIOMAS=$_POST['idiomas'];
            $APTITUDES=$_POST['aptitudes'];
            $HABILIDADES=$_POST['habilidades'];

            $datosCV = "Nombre: $NOMBRE\nExperiencia: $EXPERIENCIA\nFormacion: $FORMACION\nIdiomas: $IDIOMAS\nAptitudes: $APTITUDES\nHabilidades: $HABILIDADES\n\n";

            file_put_contents("fichero.txt", $datosCV, FILE_APPEND);
        }
        echo 'Tus datos se han guardado correctamente.'
        ?>
        <br><br><br>
        <a class="boton1" href="index.html">Regresar</a>
        <a class="boton1" href="cv.php">Ver Información</a>
    </div>
</body>
</html>