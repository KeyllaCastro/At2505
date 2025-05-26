<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 3</title>
</head>
<body>
    <form method="post" action="">
      <h1>Valide as seguintes informações</h1>  
      <hr> Nome: <input type="name" name="nome" placeholder="Digite seu nome: "/> <br>
        Idade: <input type="number" name="idade" placeholder="Digite sua idade: "/> <br>
        Salário: <input type="number" name="salario" step="0.01" min="0" placeholder="Digite seu Salário: "/> <br>
        Sexo: <input type="text" name="sexo" placeholder="Digite f ou m: "/> <br>
        Estado Civil (s, c, v, d): <input type="text" name="estadoCivil" placeholder="Digite seu estado civil: "/> <br>
        <input type="submit" value="Enviar"/>
    </form>
<?php
    //Faça um programa que leia e valide as seguintes informações:
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //a. Nome: maior que 3 caracteres;
        $nome = $_POST['nome'];
        while (strlen($nome) <= 3) {
            echo "$nome , inválido deve ser maior que 3 caracteres.<br>";
            exit;
        }
        echo "nome válido: $nome.<br>";
    //b. Idade: entre 0 e 150;
            $idade = $_POST['idade'];
            while ($idade < 0 || $idade > 150) { 
                echo "$idade, inválido. A idade deve ser entre 0 e 150.<br>";
                return; 
            }
            echo "Idade válida: $idade. <br>";
            
    //c. Salário: maior que zero;
            $salario = $_POST['salario'];
            while ($salario <= 0) {
                echo "$salario, inválido. O salário deve ser maior que zero.<br>";
                return; 
            }
            echo "Salario válido: $salario <br>";
    //d. Sexo: 'f' ou 'm';
        $sexo = $_POST['sexo'];
            while ($sexo != 'f' && $sexo != 'm') {
                echo "$sexo, inválido. O sexo deve ser f(feminino) ou m(masculino).<br>";
                return; 
            }
       echo "Sexo válido: $sexo<br>";
    //e. Estado Civil: 's', 'c', 'v', 'd'; 
        $estadoCivil = $_POST['estadoCivil'];
        while ($estadoCivil != 's' && $estadoCivil != 'c' && $estadoCivil != 'v' && $estadoCivil != 'd') {
            echo "$estadoCivil, inválido. Estado Civil deve ser 's'(solteiro), 'c'(casado), 'v'(viúvo), 'd'(divorciado).<br>";
            return; 
        }
        echo "Estado Civil válido: $estadoCivil<br>";
    }
    ?>

</body>
</html>