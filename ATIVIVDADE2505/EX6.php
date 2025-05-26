<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 6
    </title>
</head>
<body>

    <?php
        /*6.Faça um programa que imprima na tela os números de 1 a 20, um
abaixo do outro. Depois modifique o programa para que ele mostre os
números um ao lado do outro. */
        echo "Impressão de 1 a 20 um embaixo do outro:<br>";
        $i = 1;
        while ($i <= 20) {
            echo "$i<br>";
            $i++;
        }

        echo "<br>Impressão de 1 a 20 um do lado do outro:<br>";
        $i = 1;
        while ($i <= 20) {
            echo "$i ";
            $i++;
        }
    
    
        ?>
    </body>
</html>
