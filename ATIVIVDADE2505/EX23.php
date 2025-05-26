<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 23</title>
</head>
<body>
    <h3>Mostrar números primos até N</h3>
    <form method="post">
        Digite um número: <input type="number" name="numN" min="2" required>
        <input type="submit" value="Mostrar numeros primos">
    </form>

        <?php
        /*Faça um programa que mostre todos os primos entre 1 e N sendo N um
        número inteiro fornecido pelo usuário. O programa deverá mostrar
        também o número de divisões que ele executou para encontrar os
        números primos. Serão avaliados o funcionamento, o estilo e o número
        de testes (divisões) executados.*/
        if ($_POST) {
            $numN = $_POST['numN'];
            $divisoes = 0;

            echo "<p>Os números primos entre 1 e $numN são:</p>";

            for ($i = 2; $i <= $numN; $i++) {
                $primo = true;

                for ($j = 2; $j < $i; $j++) {
                    $divisoes++;

                    if ($i % $j == 0) {
                        $primo = false;
                        break;
                    }
                }

                if ($primo) {
                    echo "<p>$i</p>";
                }
            }

            echo "<p>O total de divisões executadas: $divisoes</p>";
        }
        ?>
</body>
</html>