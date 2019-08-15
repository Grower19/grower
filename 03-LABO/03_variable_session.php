<?php
session_start();
$_SESSION['variable_de_session_1']= "algun valor";
$_SESSION['variable_de_session_2']= "algun otro valor";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ejemplo de variable de session</title>
</head>
<body>
    <h2>ejmplo de session </h2>
    <pre>
    <?php
    print_r($_SESSION);
    ?> 
    </pre>
    
</body>
</html>