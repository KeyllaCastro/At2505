<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 21
    </title>
</head>
<>
    <h3>Numero Inserido é primo?</h3>

    <form method="post">
        <h3>Digite o Número Inteiro: </h3>
        <input type="number" name="num" required>
        <input type="submit" value="Enviar">
    </form>

        <?php
        /*21.Faça um programa que peça um número inteiro e determine se ele é ou
não um número primo. Um número primo é aquele que é divisível
somente por ele mesmo e por 1.  */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $num = $_POST['num'];
            $divisores = 0;

            for ($i = 1; $i <= $num; $i++) {
                if ($num % $i == 0) {
                    $divisores = $divisores + 1;
                }
            }

            if ($divisores == 2) {
                echo "O número que foi inserido $num é primo";
            } else {
                echo "O número que foi inserido $num não é primo";
            }
        }
        ?>

    </body>
</html>