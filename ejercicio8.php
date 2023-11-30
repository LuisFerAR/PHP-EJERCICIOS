<?php

if($_POST){

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    $suma = "Suma ".$valorA + $valorB;
    $resta = "resta ".$valorA - $valorB;
    $multiplicacion = "M ".$valorA * $valorB;
    $dividir = "D ".$valorA / $valorB;

    echo $suma."<br/>";
    echo $resta."<br/>";
    echo $multiplicacion."<br/>";
    echo $dividir."<br/>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio8.php" method="post">
        A:
        <input type="text" name="valorA" id="">
        <br>
        B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Enviar">
       
    </form>
</body>
</html>