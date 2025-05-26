<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 11
    </title>
</head>
<body>
    <form method="post" action="">
        <h1>    Digite dois numero e veja qual o intervalo e a soma deles:</h1>
        Digite um número: <input type="number" name="num1"><br>
        Digite outro numero: <input type="number" name="num2"><br>
        <input type="submit" value="Enviar">
    </form>


    <?php
        /*11.Altere o programa anterior para mostrar no final a soma dos números.*/
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $soma = 0;

    echo "<br><br> Números entre $num1 e $num2: <br><br>";
    for ($i =  $num1 + 1; $i < $num2; $i++){

        echo "<br><br> $i <br>";
        $soma = $soma + $i;
        
    }
   
    echo "<br><br> Soma dos números: $soma <br><br>";
    }
        ?>

    </body>
</html>
