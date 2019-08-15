<?php 
setcookie("valor_1", "1");
setcookie("valor_2", "2");
setcookie("valor_3", "3");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ejemplo de variable reservada Cookie</title>
</head>
<body>
    <pre>
    <?php
    print_r($_COOKIE);
    ?>
    <pre>
    
</body>
</html>