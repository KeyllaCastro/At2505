
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 19</title>
    <title>Menor, Maior e Soma de N Números</title>
</head>
<body>
    <h3>Informe 5 números. Conjunto de numeros e determinação de Menor, Maior e Soma de N Números</h3>
    <form method="post">
    Número 1: <input type="number" name="num1" required><br>
    Número 2: <input type="number" name="num2" required><br>
    Número 3: <input type="number" name="num3" required><br>
    Número 4: <input type="number" name="num4" required><br>
    Número 5: <input type="number" name="num5" required><br>
    <input type="submit" value="Calcular">
    </form>


    <?php
    /*19.Altere o programa anterior para que ele aceite apenas números entre 0
e 1000. */
    
    if ($_POST) {
        // Usando direto $_POST para pegar os números no laço
        $valido = true;

        // validação
        for ($i = 1; $i <= 5; $i++) {
            if (!isset($_POST["num$i"]) || $_POST["num$i"] < 0 || $_POST["num$i"] > 1000) {
                $valido = false;
                break;
            }
        }

        if (!$valido) {
            echo "<p style='color:red;'>Erro: Todos os números devem estar entre 0 e 1000.</p>";
        } else {
            $menor = $_POST['num1'];
            $maior = $_POST['num1'];
            $soma = 0;

            for ($i = 1; $i <= 5; $i++) {
                $atual = $_POST["num$i"];
                $soma += $atual;

                if ($atual < $menor) {
                    $menor = $atual;
                }
                if ($atual > $maior) {
                    $maior = $atual;
                }
            }

            echo "<p>O menor valor: $menor</p>";
            echo "<p>O maior valor: $maior</p>";
            echo "<p>A soma dos valores: $soma</p>";
        }
    }
    ?>
</body>
</html>
