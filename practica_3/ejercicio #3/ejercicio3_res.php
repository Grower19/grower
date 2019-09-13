<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Solucion al ejercicio 3</h1>
    <div class="content">
        <?php
            $dia = $_GET["dia"];
            $toca = "El dia de la semana  es: ";
            switch ($dia) {
                case  1:
                    echo $toca."lunes";
                    break;
                case 2:
                    echo $toca."martes";
                    break;
                case 3:
                    echo $toca."miercoles";
                    break;
                case 4:
                    echo $toca."jueves";
                    break;
                case 5:
                    echo $toca."viernes";
                    break;
                case 6:
                    echo $toca."sabado";
                    break;
                 case 7:
                    echo $toca."domingo";
                    break;
                default:
                    echo "El numero no es correcto";
                    break;
            }
        ?>
    </div>
    <p>
        <a href="ejercicio_3.php">Volver al Ejercicio</a>
    </p>
</body>
</html> 