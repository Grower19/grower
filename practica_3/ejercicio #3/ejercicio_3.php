
<?php
 $titulo = "ejercicio 3"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo?></title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Practica 3</h1>
    <h2>escribe un programa en que dado un numero del 1 a 7 escriba el correspondiente nombre del dia de la semana</h2>
    <div id="content">
    <p>por favor introduzca un numero de 1 a 7 y le dire que dia de la semana es</p>
    <form action="ejercicio3_res.php" method="get">
    <input type="text" name="dia" autofocus>
    <input type="submit" value="Aceptar">
    </form>

    </div>

</body>
</html>