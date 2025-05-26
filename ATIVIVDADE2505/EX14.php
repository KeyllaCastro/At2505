<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 14
    </title>
</head>
<body>
    <form method="post" action="">
        <h2>Digite dez numeros:</h2>
        Primiero número: <input type="number" name="num1" placeholder="Digite um número: "/> <br>
        Segundo número: <input type="number" name="num2" placeholder="Digite outro número: "/> <br>
        Terceiro número: <input type="number" name="num3" placeholder="Digite outro número: "/> <br>
        Quarto número: <input type="number" name="num4" placeholder="Digite outro número: "/> <br>
        Quinto número: <input type="number" name="num5" placeholder="Digite outro número: "/> <br>
        Sexto número: <input type="number" name="num6" placeholder="Digite um número: "/> <br>
        Setimo número: <input type="number" name="num7" placeholder="Digite outro número: "/> <br>
        Oitavo número: <input type="number" name="num8" placeholder="Digite outro número: "/> <br>
        Nono número: <input type="number" name="num9" placeholder="Digite outro número: "/> <br>
        Decimo número: <input type="number" name="num10" placeholder="Digite outro número: "/> <br>
        <input type="submit" value="Enviar"/>
    </form>

    <?php

        /*Faça um programa que peça 10 números inteiros, calcule e mostre a
quantidade de números pares e a quantidade de números impares.*/
        if ($_POST) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];
            $num4 = $_POST["num4"];
            $num5 = $_POST["num5"];
            $num6 = $_POST["num6"];
            $num7 = $_POST["num7"];
            $num8 = $_POST["num8"];
            $num9 = $_POST["num9"];
            $num10 = $_POST["num10"];

            $pares = 0;
            $impares = 0;
                
            for ($i = 1; $i <= 1; $i++) {
                if ($num1 % 2 == 0) { 
                    $pares++; 
                } else { $impares++; }
                if ($num2 % 2 == 0) {
                    $pares++; 
                    } else { $impares++; }
                if ($num3 % 2 == 0) {
                    $pares++;
                    } else { $impares++; }
                if ($num4 % 2 == 0) {
                    $pares++; 
                    } else { $impares++; }
                if ($num5 % 2 == 0) {
                    $pares++; 
                    } else { $impares++; }
                if ($num6 % 2 == 0) {
                    $pares++; 
                    } else { $impares++; }
                if ($num7 % 2 == 0) {
                    $pares++; 
                    } else { $impares++; }
                if ($num8 % 2 == 0) {
                    $pares++; 
                    } else { $impares++; }
                if ($num9 % 2 == 0) 
                { $pares++; 
                } else { $impares++; }
                if ($num10 % 2 == 0) {
                    $pares++; 
                    } else { $impares++; }
            }

                echo "Quantidade de números pares: $pares<br>";
                echo "Quantidade de números ímpares: $impares";
        }
?>

    </body>
</html>