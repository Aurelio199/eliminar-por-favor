<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<input type="password" placeholder="Agrega password">
    <?php 
    $num1 = 2;
    $num2 = 5;

    echo 'el numero<br>';
    echo $num1;
    echo '<br> es <br>';
    if ($num1 > $num2) {
        echo 'Es mayor <br>';
        }else{
            echo 'Es menor <br>';
        }

    echo 'que el numero <br>';
    echo $num2;

    ?>
</body>
</html>