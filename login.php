<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.jpg">
    <link rel="stylesheet" href="assets/css/stylelogin.css">
    <title>Plataforma</title>
</head>
<body>
    <header>

    </header>

    <main class="conteudo">
        <section class="container">
            <div class="logo">
                <a href="index.html"><img src="assets/img/login.png"></a>
            </div>

            <h1 class="titulo1">Login</h1>
            <h3 class="titulo2">Acesse com sua conta</h3>

            <?php 
            //Verificando se a sessão existe com a função ISSET
            if(isset($_SESSION['nao_autenticado'])):

            ?>

            <!--Mensagem de erro-->

            <div class="notification is-danger" align="center">
              <p style="color:red">Erro: Usuário ou senha inválidos.</p>

            </div>

            <?php 
            endif; //Fechando o IF
            
            //Destruindo a sessão nao_autenticado com a função UNSET
            unset($_SESSION['nao_autenticado']);
            
            ?>

            <!--Início do formulário-->
            <form action="scriptlogin.php" method="post" id="form_login">
                <div>
                    <label>Usuário <br></label>
                    <input type="email" name="email" placeholder="E-mail do usuário">
                </div>
                <div>
                    <label>Senha <br></label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <div class="botao">
                    <button type="submit">Entrar</button>
                </div>
            </form><!--Fím do formulário-->

            <div class="conta">
                <h4 style="text-align: center;">Ainda não tem conta? <a href="cadastro.php">Faça seu cadastro!</a></h4>
            </div>
            
        </section>

    </main>

    <footer class="footer-box">
        <h2>&copy; Marketplace</h2>
        <p>Versão: 1.0.000 - AMBIENTE DE PRODUÇÃO: AM</p>
        <p>Todos os direitos reservados</p>
    </footer>
</body>
</html>