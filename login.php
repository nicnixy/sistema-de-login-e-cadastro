<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bem-vindo de volta! </title>
    <link rel="shortcut icon" href="Imagens/meditacao.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <divb id="sessoes">
        <section id="lado-A">
            <div id="imagem-do-cabecalho">
                <img src="Imagens/mulher-meditando.svg" alt="Mulher meditando" id="mulher-meditando">
            </div>
        </section>
    
        <section id="lado-B">
            <header id="cabecalho-da tela">
                <div>
                    <h1 id="saudacao-do-cabecalho"> Bem-vindo de volta! </h1>
                </div>
    
                <div>
                    <p> Não é um membro?</p>
                    <button id="botao-de-cadastro-do-cabecalho">
                        <a href="cadastro.php"> Cadastre-se </a>
                    </button>
                </div>
            </header>
    
            <div id="sessao-de-formularios">
                <form action="">
                    <div id="formularios">
                        <div class="sessao-de-inputs">
                            <label for="email"> Email </label> <br>
                            <input type="email" name="email" placeholder="seuemail@exemplo.com" required>
                        </div>
        
                        <div class="sessao-de-inputs">
                            <label for="password"> Senha </label> <br>
                            <input type="password" name="password" placeholder="********" maxlength="8" required>
                        </div>
                    </div>
                </form>
    
                <div id="botao-de-login">
                    <button type="submit" id="botao"> Login </button>
                </div>
            </div>
        </section>
    </div>
</body>
</html>