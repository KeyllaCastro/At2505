<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 7
    </title>
</head>
<body>
    <form method="post" action="">
      <h1>Insira 5 numeros e veja qula é o maior: </h1>  
      <hr> Primiero número: <input type="number" name="num1" placeholder="Digite um número: "/> <br>
       Segundo número: <input type="number" name="num2" placeholder="Digite outro número: "/> <br>
       Terceiro número: <input type="number" name="num3" placeholder="Digite outro número: "/> <br>
       Quarto número: <input type="number" name="num4" placeholder="Digite outro número: "/> <br>
        Quinto número: <input type="number" name="num5" placeholder="Digite outro número: "/> <br>
        <input type="submit" value="Enviar"/>

        <?php
        /* 7. Faça um programa que leia 5 números e informe o maior número. */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        $num4 = $_POST["num4"];
        $num5 = $_POST["num5"];

        $maior = $num1; 

        for ($i = 1; $i <= 5; $i++) {
            if ($i == 2 && $num2 > $maior) {
                $maior = $num2;
            }
            if ($i == 3 && $num3 > $maior) {
                $maior = $num3;
            }
            if ($i == 4 && $num4 > $maior) {
                $maior = $num4;
            }
            if ($i == 5 && $num5 > $maior) {
                $maior = $num5;
            }
        }

        echo "O maior número é: $maior";
    }
        ?>


</body>
</html>
    
