<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 18</title>
    <title>Conjunto de numeros e determinação de Menor, Maior e Soma de N Números</title>
</head>
<body>
    <h3>Informe 5 números</h3>
    <form method="post">
    Número 1: <input type="number" name="num1" required><br>
    Número 2: <input type="number" name="num2" required><br>
    Número 3: <input type="number" name="num3" required><br>
    Número 4: <input type="number" name="num4" required><br>
    Número 5: <input type="number" name="num5" required><br>
    <input type="submit" value="Calcular">
    </form>

<?php
/* 18. Faça um programa que, dado um conjunto de N números, determine o
menor valor, o maior valor e a soma dos valores. */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $num5 = $_POST['num5'];

    $menor = $num1;
    $maior = $num1;
    $soma = 0;

    for ($i = 1; $i <= 5; $i++) {
        $atual = ${"num$i"};
        $soma = $soma  + $atual;

        if ($atual < $menor) {
            $menor = $atual;
        }
        if ($atual > $maior) {
            $maior = $atual;
        }
    }

    echo "<p>O menor valor: $menor</p>";
    echo "<p>O maior valor: $maior</p>";
    echo "<p>A soma dos valores: $soma</p>";
}
?>
?>
</body>
</html>
