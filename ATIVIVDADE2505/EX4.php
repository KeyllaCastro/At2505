<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 4</title>
</head>
<body>

</form>

    <?php
        /*4. Supondo que a população de um país A seja da ordem de 80000 habitantes com uma taxa anual de crescimento de 3% e que a
        população de B seja 200000 habitantes com uma taxa de crescimento de 1.5%. Faça um programa que calcule e escreva o número de anos
        necessários para que a população do país A ultrapasse ou iguale a população do país B, mantidas as taxas de crescimento. */
        
        $populacaoA = 80000;
        $populacaoB = 200000;
        $taxaA = 0.03;
        $taxaB = 0.015;
        $ano = 0;
        
        while($populacaoA < $populacaoB){
            $populacaoA += $populacaoA*$taxaA;
            $populacaoB += $populacaoB*$taxaB;
            $ano++;
        }
        
        echo "$ano anos para a população do país A ultrapassar ou igualar a do país B <p>";
        echo " $populacaoA: População final de A <p>";
        echo " $populacaoB: População final de B";
    ?>
    </body>
</html>