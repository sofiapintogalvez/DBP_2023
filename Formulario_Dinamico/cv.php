<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;700;800&family=Quicksand&display=swap" rel="stylesheet">
    <title>Información</title>
    <style>
        body {
            font-family: 'Dosis', sans-serif;
            margin: 0;
            padding: 0;
            background: whitesmoke;
        }
        
        .contenedor {
            background-color: #fff;
            max-width: 700px;
            margin: 20px auto;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding-bottom: 20px;
        }
        
        h1 {
            padding-bottom: 20px;
            padding-top: 20px;
            margin: 0 0 30px;
            color: #fff;
            font: 500 35px 'Dosis', sans-serif;
            text-shadow: 1px 1px 0 rgba(0,0,0,.3);
            background: #33a4c9;
            text-align: center
        }

        p {
            margin-left: 5%;
            font-size: 18px;
            font-family: 'Dosis', sans-serif;
            white-space: pre-line;
            padding-bottom: 10px;
        }

        .boton2 {
            font-family: 'Dosis', sans-serif;
            font-weight: 500;
            text-decoration: none;
            border: 1px solid #2d2f38;
            padding: 8px 8px;
            width: 40%;
            margin-left: 47%;
        }

        .boton2:hover {
            background: #2d2f38;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <?php
        $datosCV = file_get_contents("fichero.txt");

        $cvArray = explode("\n\n", $datosCV);
        $cont = 0;

        foreach ($cvArray as $cv) {
            $cont += 1;
            if ($cont < $cv) {
                echo "<h1>Información CV</h1>";
            }
            echo "<p>$cv</p>";
        }
        ?>
        <a class="boton2" href="index.html">Regresar</a>
    </div>
</body>
</html>