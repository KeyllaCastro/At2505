
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 16
    </title>
</head>
<body>
       <h3>Gerando a série de Fibonacci até que o valor seja maior que 500.</h3>
  
    </form>

      <?php
        /* A série de Fibonacci é formada pela sequência
    0,1,1,2,3,5,8,13,21,34,55,... Faça um programa que gere a série até que o valor seja maior que 500. */
    $a = 0;
    $b = 1;

        echo "Série de Fibonacci: ";
        while (true) {

            $proximo = $a + $b;
            if($proximo > 500){
                break;
            }
            echo "$proximo ";
            $a = $b;
            $b = $proximo;
    }

    ?>
    </body>
</html>