<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 17
    </title>
</head>
<body>
       <h3>Calculando o fatorial de um número inteiro.</h3>
    <form method="post">
        Digite o Número <input type="number" name="num" min="1" required>
        <input type="submit" value="Gerar calculo">
    </form>

    <?php
    /*.Faça um programa que calcule o fatorial de um número inteiro fornecido pelo usuário. Ex.: 5!=5.4.3.2.1=120  */
    
        if ($_POST) {

        $num = $_POST['num'];

        $fatorial = 1;

        for ($i = $num; $i > 1; $i--) {
            $fatorial *= $i;
        }

        echo "O fatorial do número $num digitado é: $fatorial";
    }
    ?>

    </body>
</html>