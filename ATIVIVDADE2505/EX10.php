<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 10
    </title>
</head>
<body>
    <form method="post" action="">
        <h1>    Digite dois numero e veja qual o intervalo:</h1>
        Digite um número: <input type="number" name="num1"><br>
        Digite outro numero: <input type="number" name="num2"><br>
        <input type="submit" value="Enviar">
    </form>


    <?php
     /*10.Faça um programa que receba dois números inteiros e gere os números
inteiros que estão no intervalo compreendido por eles.  */

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    echo "Números entre $num1 e $num2:<br>";

    for ($i = $num1 + 1; $i < $num2; $i++) {
        echo "$i<br>";
    }
    ?>


    </body>
</html>
