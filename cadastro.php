<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $confirmpassword = $_POST['confirmpassword'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(name,email,password,lastname,phone,confirmpassword) VALUES ('$name','$email','$password','$lastname','$phone','$confirmpassword')");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastre-se aqui! </title>
    <link rel="shortcut icon" href="Imagens/meditacao.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div id="sessoes">
        <section id="lado-A">
            <div id="imagem-do-cabecalho">
                <img src="Imagens/mulher-meditando.svg" alt="Mulher meditando" id="mulher-meditando">
            </div>
        </section>
    
        <section id="lado-B">
            <header id="cabecalho-da tela">
                <div>
                    <h1 id="cta-do-cabecalho"> Junte-se a nós! </h1>
                </div>
    
                <div>
                    <p> Possui uma conta? </p>
                    <button id="botao-de-login-do-cabecalho" >
                        <a href="login.html"> Login </a>
                    </button>
                </div>
            </header>
    
            <div id="sessao-de-formularios">
                <form action="cadastro.php" method="POST">
                    <div id="formulario">
                        <div class="sessao-de-inputs">
                            <label for="name"> Primeiro nome </label> <br>
                            <input type="text" name="name" placeholder="digite seu primeiro nome" required>
                        </div>

                        <div class="sessao-de-inputs">
                            <label for="email"> Email </label> <br>
                            <input type="email" name="email" placeholder="seuemail@exemplo.com" required>
                        </div>

                        <div class="sessao-de-inputs">
                            <label for="password"> Senha </label> <br>
                            <input type="password" name="password" placeholder="********" maxlength="8" required>
                        </div>
        
                        <div class="sessao-de-inputs">
                            <label for="lastname"> Sobrenome </label> <br>
                            <input type="text" name="lastname" placeholder="digite seu sobrenome" required>
                        </div>
        
                        <div class="sessao-de-inputs">
                            <label for="phone"> Telefone </label> <br>
                            <input type="tel" name="phone" placeholder="99999999999" maxlength="15" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" required>
                        </div>
        
                        <div claPss="sessao-de-inputs">
                            <label for="confirmpassword"> Confirme sua senha </label> <br>
                            <input type="password" name="confirmpassword" placeholder="********" maxlength="8" required>
                        </div>
                    </div>

                    <div id="botao-de-cadastro">
                        <button type="submit" name="submit" id="botao" > Cadastre-se </button>
                    </div>

                </form>
            </div>
        </section>
    </div>
</body>
</html>