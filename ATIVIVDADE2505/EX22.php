<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 22
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
    if ($_POST) {
        $num = $_POST['num'];
        $divisores = 0;

        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $divisores++;
            }
        }

        if ($divisores == 2) {
            echo "O número que foi inserido $num é primo";
        } else {
            echo "O número que foi inserdo $num não é primo";
            echo "<p> $num é divisível por: </p>";
            for ($i = 1; $i <= $num; $i++) {
                if ($num % $i == 0) {
                    echo "<p>$i</p>";
                }
            }
        }
    }
    ?>

    </body>
</html>