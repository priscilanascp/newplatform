<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylecadastro.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/img/logospm2.jpeg">
    <title>Cadastro</title>
</head>
<body>
    
    <br>

    <!--Verificando se a sessão "cadastrado" existe-->
    <?php 
    if(isset($_SESSION['cadastrado'])):
    
    ?>
    <!--Mensagem de usuário cadastrado-->

    <div class="notification is-danger" align="center">
    <p style="color:#fff">Usuário cadastrado com sucesso!</p>
    </div>

    <?php 
    endif;
    unset($_SESSION['cadastrado']);
    ?>


    <!--Verificando se a sessão "nao_cadastrado" existe-->
    <?php 
    if(isset($_SESSION['nao_cadastrado'])):
    
    ?>
    <!--Mensagem de Usuário não cadastrado-->

    <div class="notification is-danger" align="center">
    <p style="color:#f00">Erro: e-mail já cadastrado!</p>
    </div>

    <!--Fechando o IF e destruindo a SESSÃO-->
    <?php 
    endif;
    unset($_SESSION['nao_cadastrado']);
    ?>




<main class="conteudo">
<section class="container">
<div class="imagem">
            <img src="./assets/img/supermercado-img.jpeg" alt="Imagem de fundo">
        </div>
        <div class="formulario">
        
  <div class="title">Cadastre-se</div>
 
  <form action="scriptcadastro.php" method="post" id="form-cad">
 
  <div class="user-details">
      <div class="input-box">
        <label for="nome" class="details">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
      </div>
      <div class="input-box">
        <label for="email" class="details">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Digite seu email" required>
      </div>
      <div class="input-box">
        <label for="senha" class="details">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
      </div>
      <div class="input-box">
        <label for="nome" class="details">Rua:</label>
        <input type="text" id="nome" name="end_rua" placeholder="rua" required>
      </div>
      <div class="input-box">
        <label for="nome" class="details">Número:</label>
        <input type="text" id="nome" name="end_num" placeholder="número" required>
      </div>
      <div class="input-box">
        <label for="nome" class="details">Bairro:</label>
        <input type="text" id="nome" name="end_bairro" placeholder="bairro" required>
      </div>
      <div class="input-box">
        <label for="nome" class="details">Telefone:</label>
        <input type="text" id="nome" name="telefone" placeholder="telefone" required>
      </div>
      <div class="input-box">
        <label for="tipo" class="details">Tipo de usuário:</label>
        <select id="tipo" name="tipo" required>
          <option value=''>Selecione uma opção</option>
          <option value='visitante'>Visitante</option>
          <option value='anunciante'>Anunciante</option>
        </select>
      </div>
    </div>
    <div class="input-box">
      <label for="termos">
        <input type="checkbox" id="termos" name="termos" required>
        Concordo com os <a href='#' target='_blank'>termos e condições</a>
      </label>
    </div>
    
    <div class="botao">
      <button type="submit">Cadastrar</button>
    </div>
  </form>
      </div>
</section>
</main>

    <footer class="container-footer">
       
                         
    <span>&copy; Todos os direitos reservados a plataforma - 2024</span>
   
    <p style="margin-top: 10px;"><a href="index.php">Voltar a home</a></p>

    </footer>
    
</body>
</html>