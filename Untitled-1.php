<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // escolha
    $numero01 = 67;
    $numero02 = 45;
    $op = "x";

    switch($op ){
        case "+" :
            $resultado = $numero01 + $numero02;
        break;

        case "-" :
            $resultado = $numero01 - $numero02;
        break;

        case "/" :
            $resultado = $numero01 / $numero02;
        break;

        case "*" :
            $resultado = $numero01 * $numero02;
        break;

        default:
            $resultado = "não temos esta operação";
        break;

    }

    echo $resultado

    ?>
</body>
</html>