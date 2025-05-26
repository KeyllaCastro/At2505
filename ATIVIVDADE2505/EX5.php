<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 5</title>
</head>
<body>
      <form method="post" action="">
        <h1>População: País A vs País B</h1>
        <hr>
            População do País A: <input type="number" name="popA" placeholder="Ex: 80000" required> <br>
            Taxa de Crescimento do País A (%): <input type="number" step="0.01" name="taxaA" placeholder="Ex: 3" required> <br>
            População do País B: <input type="number" name="popB" placeholder="Ex: 200000" required> <br>
            Taxa de Crescimento do País B (%): <input type="number" step="0.01" name="taxaB" placeholder="Ex: 1.5" required> <br>
        <input type="submit" value="Enviar"/>
</form>

    <?php
        /*4. Supondo que a população de um país A seja da ordem de 80000 habitantes com uma taxa anual de crescimento de 3% e que a
        população de B seja 200000 habitantes com uma taxa de crescimento de 1.5%. Faça um programa que calcule e escreva o número de anos
        necessários para que a população do país A ultrapasse ou iguale a população do país B, mantidas as taxas de crescimento. */

        if (isset($_POST["popA"]) && isset($_POST["popB"]) && isset($_POST["taxaA"]) && isset($_POST["taxaB"])) {

        $populacaoA = $_POST ["popA"];
        $populacaoA = $_POST ["popB"];
        $taxaA = $_POST["taxaA"];
        $taxaB = ["taxaB"];
        
        
        if ($popA <= 0 || $popB <= 0 || $taxaA <= 0 || $taxaB <= 0) {
                echo "Todos os valores devem ser maiores que zero.<br>";
                return;
            }

            $anos = 0;

            while ($popA < $popB) {
                $popA += $popA * $taxaA;
                $popB += $popB * $taxaB;
                $anos++;
            }

            echo "Resultado:<br>";
            echo "$anos anos para a população do país A ultrapassar ou igualar a do país B.<br>";
            echo "População final de A $populacaoA <br>";
            echo "População final de B $populacaoB <br>";
            echo "Você pode repetir a operação preenchendo o formulário novamente.";
        }
    
        ?>
    </body>
</html>