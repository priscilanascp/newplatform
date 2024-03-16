<?php
session_start();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logospm2.jpeg">
    <title>Plataforma de Ofertas</title>
</head>
<body>
    <header id="header"> <!--Início do Header-->
        <nav><!--Barra de navegação-->
            <ul>
                <a class="a-nav" href="#Home">Página Inicial</a>
                <a class="a-nav" href="#Quem-Somos" class="link-cabecalho">Quem Somos</a>
                <a class="a-nav" href="#Servicos" class="link-cabecalho">Serviços</a>
                <a class="a-nav" href="cadastro.php">Cadastre-se</a>
                <a class="a-nav" href="login.php">Login</a>
            </ul>           
    
    </nav>
    <div class="container-search">
        <form class="topnav-search-wrap" style="flex:1" action="">
        <input class="topnav-search-field" name="q"  placeholder="Procure aqui...">
       <button class="topnav-search-submit" aria-label="Search" title="Search">
        <div class="icon-search" style="width:20px;height:22px"></div>
       </button></form>
    </div>

        <div class="titulo">
            <h1>Super Ofertas</h1>
            <h3>Encontre as melhores ofertas do mercado aqui!</h3>
        </div>
    </header><!--Fim do Header-->

<hr>

    <!--Sections de Serviços-->
    <h2 id="Servicos">Nossos serviços</h2>
    <div class="container-search">
        <form class="topnav-search-wrap" style="flex:1" action="">
        <input class="topnav-search-field" name="q"  placeholder="Procure aqui...">
       <button class="topnav-search-submit" aria-label="Search" title="Search">
        <div class="icon-search" style="width:20px;height:22px"></div>
       </button></form>
    </div>
    
    <div class="caixa-central">
    <div class="card">
        <img src="assets/img/db-img.jpg"alt="Encarte de Supermercado">
        <div class="card-info">
        <h2>Promoções da Semana</h2>
        <p>Descrição das ofertas e promoções aqui...</p>
        <p>Data: 22 de Dezembro de 2023</p>
        </div>
    </div>



    <div class="card">
        
        <img src="assets/img/carrefour-img.jpg"alt="Encarte de Supermercado">
        <div class="card-info">
        <h2>Promoções da Semana</h2>
        <p>Descrição das ofertas e promoções aqui...</p>
        <p>Data: 22 de Dezembro de 2023</p>
        </div>
    </div>

    <div class="card">
        <img src="assets/img/attack-img.jpg"alt="Encarte de Supermercado">
        <div class="card-info">
        <h2>Promoções da Semana</h2>
        <p>Descrição das ofertas e promoções aqui...</p>
        <p>Data: 22 de Dezembro de 2023</p>
        </div>
    </div>

    <div class="card">
        <img src="assets/img/rodrigues-img.jpg"alt="Encarte de Supermercado">
        <div class="card-info">
        <h2>Promoções da Semana</h2>
        <p>Descrição das ofertas e promoções aqui...</p>
        <p>Data: 22 de Dezembro de 2023</p>
        </div>
    </div>
    </div>


   

    <div class="caixa-inferior">
        <h2 id="Quem-Somos">Sobre nós</h2>
        <p class="paragrafo-inferior">
Somos uma plataforma dedicada a simplificar sua experiência de compra, concentrando todos os encartes promocionais dos principais supermercados da cidade em um único lugar. Nosso objetivo é proporcionar a você, cliente, acesso fácil e conveniente a uma variedade de ofertas e promoções para que possa tomar decisões informadas na hora de suas compras.

Aqui, você encontrará uma compilação abrangente dos encartes dos supermercados locais, oferecendo uma visão clara e detalhada das melhores ofertas do dia. Todos os supermercados são bem-vindos em nossa plataforma, garantindo que você tenha acesso a uma ampla gama de opções para escolher.

Nossa missão é simplificar sua busca pela melhor oferta, economizando seu tempo e dinheiro. Queremos ser seu parceiro confiável na jornada de compras, ajudando-o a identificar as promoções mais atrativas e a tomar decisões inteligentes para suas necessidades do dia a dia.

Junte-se a nós e descubra como podemos facilitar sua experiência de compras, proporcionando informações atualizadas sobre ofertas e descontos para que você possa aproveitar ao máximo suas visitas aos supermercados locais.

Seja bem-vindo à nossa plataforma, onde a escolha da melhor oferta está ao alcance de um clique.
        </p>

        </div>


    <!--Footer-->
    <footer id="footer">
        <p>&copy; Todos os direitos reservados a plataforma  - 2024.</p>
    </footer>
    
</body>
</html>
