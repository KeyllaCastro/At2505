<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 12
    </title>
</head>
<body>
    <form method="post" action="">
        <h2>Digite um número de 1 a 10, para gerar a taboada:</h2>
        <input type="number" name="numTaboada" min="1" max="10" required>
        <input type="submit" value="Ver Tabuada">
    </form>


    <?php

    /*Desenvolva um gerador de tabuada, capaz de gerar a tabuada de
qualquer número inteiro entre 1 a 10. O usuário deve informar de qual
numero ele deseja ver a tabuada.*/

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $numTaboada = $_POST["numTaboada"];
        echo "<h3>Tabuada de $numTaboada:</h3>";
        
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numTaboada * $i;
            echo "$numTaboada x $i = $resultado<br>";
        }
    }
    ?>

    </body>
</html>
