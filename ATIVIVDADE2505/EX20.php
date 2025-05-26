<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 17
    </title>
</head>
<>
    <h3>Calculando o fatorial de um número inteiro.</h3>

    <form method="post">
        <h3>Digite o Número (entre 1 e 15): </h3>
        <input type="number" name="num" min="1" max="15" required>
        <input type="submit" value="Gerar cálculo">
    </form>

        <?php
        /*20.Altere o programa de cálculo do fatorial, permitindo ao usuário calcular
o fatorial várias vezes e limitando o fatorial a números inteiros positivos
e menores que 16. */
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $num = $_POST['num'];

                if ($num >= 1 && $num <= 15) {
                    $fatorial = 1;

                    for ($i = $num; $i > 1; $i--) {
                        $fatorial = $fatorial * $i;
                    }

                    echo "Fatorial de $num é $fatorial";
                } else {
                    echo "Digite um número entre 1 e 15.";
                }
            }
        ?>

    </body>
</html>