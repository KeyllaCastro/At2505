<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 13
    </title>
</head>
<body>
    <form method="post" action="">
        <h2>Digite dois números:</h2>
        Primeiro número: <input type="number" name="numBase" placeholder="Digite um número" required> <br>
        Segundo número: <input type="number" name="numExpoente" placeholder="Digite outro número" required> <br>
        <input type="submit" value="Enviar">
    </form>

    <?php

        /*13.Faça um programa que peça dois números, base e expoente, calcule e
    mostre o primeiro número elevado ao segundo número. Não utilize a
    função de potência da linguagem. .*/
        
            $numBase = (int)$_POST["numBase"];
            $numExpoente = (int)$_POST["numExpoente"];
            $res = 1;

            if($_POST) {
            for ($i = 1; $i <= $numExpoente; $i++) {
                $res = $res * $numBase;
            }

             echo " $numBase elevado a $numExpoente, <br>
             o resultado é: $res.";
        }
?>

    </body>
</html>