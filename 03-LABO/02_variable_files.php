<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ejemplo de variables de files</title>
</head>
<body>
    <h2> ejemplo de variable FILES POST</h2>
    <form  method="post" enctype = "multipart/ form-data">
    archivo: <input type="file" name= "archivo" >
    <input type="submit" value= "enviar" >
    </form>
    <pre>
    <?php
    if ($_FILES){
        print_r($_FILES);

    }
    ?>
    </pre>
</body>
</html>