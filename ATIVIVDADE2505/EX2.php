
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2</title>
</head>
<body>

    <<form action="" method="post">
      <h1>Faça seu login, usuário e login</h1>  
      <hr> Usuário: <input type="text" name="usuario" placeholder="Digite seu usuário: "/> <br>
        Senha: <input type="password" name="senha" placeholder="Digite sua senha: "/> <br>
        <input type="submit" value="Cadastrar"/>
    </form>
   
    <?php
        /*Faça um programa que leia um nome de usuário e a sua senha e não
        aceite a senha igual ao nome do usuário, mostrando uma mensagem de
        erro e voltando a pedir as informações. */

        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
    
        if ($usuario == $senha) {
        echo"Senha não pode ser igual nome do usuário";
            while ($usuario == $senha) 
                return;
        } else {
            echo "Você foi cadastrado!";
        }
    ?>
</body>
</html>


 