<?php 
session_start(); //Iniciando uma sessão

//Chamando um script para verificar a existencia de uma sessão
include('scriptverificalogin.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styleanunciante.css">
    <title>Anunciante</title>
    
</head>
<body>

<header>
    <div align="right">
        <h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
    </div>
    <div align="center">
        <h1>Painel do Anunciante</h1>
    </div>
    <nav align="right">
    <div class="logo-header">
        <img src="assets/img/logospm1.jpeg" alt="Logo da Plataforma">
      </div>
        <div class="botao">
            <button class="btn-logout"><a href="scriptlogout.php">Logout</a></button>
        </div>
        <ul class="menu">
      <li><a href="#">Início</a></li>
      <li><a href="#">Promoções</a></li>
      <li><a href="#">Termos de Serviço</a></li>
        </ul>
        
    </nav>

   
</header>
<h3>Conheça nossos planos</h3>
<section class="section-plan">
    

    <div class="plan-card">
      <h2>Plano Ouro</h2>
      <ul>
        <li>Destaque nos encartes</li>
        <li>maior visibilidade</li>
        <li>2 encartes diários</li>
        <li> 1 ação semanal gratuita</li>
        <li>Preço: R$99/mês</li>
      </ul>
    </div>

    <div class="plan-card">
      <h2>Plano Prata</h2>
      <ul>
        <li>média visibilidade</li>
        <li>1 encarte diário</li>
        <li>1 ação quinzenal gratuita</li>
        <li>Preço: R$79/mês</li>
      </ul>
    </div>

    <div class="plan-card">
      <h2>Plano Bronze</h2>
      <ul>
        <li>baixa visibilidade</li>
        <li>1 encarte em dias alternados</li>
        <li>1 ação mensal gratuita</li>
        <li>Preço: R$49/mês</li>
      </ul>
    </div>

    <div class="plan-card">
      <h2>Plano Plus</h2>
      <ul>
        <li>maior visibilidade</li>
        <li>2 encartes diários</li>
        <li> 1 ação semanal gratuita</li>
        <li>compra de ações especiais</li>
        <li>Preço: R$119/mês</li>
      </ul>
    </div>

</section>
<section class="section-cad">
    <form>
      <h2>Cadastre-se</h2>
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="telefone">Telefone:</label>
      <input type="tel" id="telefone" name="telefone" required>

      <label for="rua">Rua:</label>
      <input type="text" id="rua" name="rua" required>

      <label for="numero">Número:</label>
      <input type="text" id="numero" name="numero" required>

      <label for="bairro">Bairro:</label>
      <input type="text" id="bairro" name="bairro" required>

      <button type="submit">Cadastrar</button>
    </form>

    <div class="additional-info">
      <h2>Informações Adicionais</h2>

      <label for="categorias">Categorias de Produtos:</label>
      <input type="text" id="categorias" name="categorias">

      <label for="imagemPerfil">Imagem de Perfil:</label>
      <input type="file" id="imagemPerfil" name="imagemPerfil">

      <label for="descricao">Descrição do Supermercado:</label>
      <textarea id="descricao" name="descricao"></textarea>

      <label for="redesSociais">Links para Redes Sociais:</label>
      <input type="text" id="redesSociais" name="redesSociais">

      <label for="horarioEspecial">Horário Especial de Funcionamento:</label>
      <input type="text" id="horarioEspecial" name="horarioEspecial">

      <label for="politicas">Políticas de Entrega ou Retirada:</label>
      <input type="text" id="politicas" name="politicas">

      <label for="contatoAdicional">Informações de Contato Adicionais:</label>
      <input type="text" id="contatoAdicional" name="contatoAdicional">

      <label for="faq">FAQ (Perguntas Frequentes):</label>
      <textarea id="faq" name="faq"></textarea>

      <label for="termos">Termos e Condições:</label>
      <textarea id="termos" name="termos"></textarea>

      <label for="feedback">Feedback dos Clientes:</label>
      <textarea id="feedback" name="feedback"></textarea>

      <label for="painelControle">Acesso ao Painel de Controle:</label>
      <input type="text" id="painelControle" name="painelControle" placeholder="Insira o link do painel de controle">

      <button type="submit">Cadastrar</button>
    </form>

  </section>

<footer>
    <p>Copyright © 2024 - Encartes de Supermercado</p>
</footer>

</body>
</html>


  