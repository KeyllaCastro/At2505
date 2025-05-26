
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
</head>
<body>
    <main class="container">
        <h1>Nota de 0 a 10</h1>
        <form action="" method="post" class="number-form">
            <div class="input-group">
                <label for="nota">Digite uma nota de zero a 10: </label>
                <input type="number" id="nota" name="nota"  placeholder="Digite um número">
            </div>
            <button type="submit" class="submit-btn">Enviar</button>
        </form>
	<?php
    /*Faça um programa que peça uma nota, entre zero e dez. Mostre uma
    mensagem caso o valor seja inválido e continue pedindo até que o
    usuário informe um valor válido. */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota = $_POST["nota"];
        
    // enquanto a nota for menor que zero e maior que 10 o valor seja inválido 
    while ($nota <1 || $nota > 10 ){
        echo '<span style="color: red;"> Valor inválido! Digite uma nota entre zero e dez. </span>';
        exit;
    }

    echo "Você digitou a nota $nota <br>";
    }
    ?>
    </main>
</body>

</html>
