
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 15
    </title>
</head>
<body>
       <h3>Gerando a série de Fibonacci até termo digitado</h3>
    <form method="post">
        Digite o Número de termos: <input type="number" name="num" min="1" required>
        <input type="submit" value="Gerar Série">
    </form>

    <?php

    /*15.A série de Fibonacci é formada pela seqüência
1,1,2,3,5,8,13,21,34,55,... Faça um programa capaz de gerar a série até
o n−ésimo termo*/

        if ($_POST) {
        $num = $_POST['num'];
        $a = 1;
        $b = 1;

        echo "Série de Fibonacci: ";
        for ($i = 1; $i <= $num; $i++) {
            echo "$a  ";
            $prox = $a + $b;
            $a = $b;
            $b = $prox;
        }
    }
    ?>

    </body>
</html>