<?php 
session_start(); //Iniciando uma sessão

//1- Conectar o Banco de Dados
include("conexao.php");
$conn=conectar();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Encartes de Supermercados</title>
  <link rel="stylesheet" href="assets/css/stylevisitante.css">
  <link rel="shortcut icon" href="assets/img/logospm2.jpeg">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
</head>
<style>
    /* Estilo básico para o contêiner do mapa */
    #map {
      width: 100%;
      height: 400px;
    }
  </style>


<body>
  <header>

<!--Mostrar nome do usuário logado-->

<div align="right">
    <h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
</div>






<!--Link para encerrar a sessão do usuário-->
   <div class="logout">
   
    <button class="btn-close"><h3><a href="scriptlogout.php">Logout</a></h3></button>
    </div>

<div align="center"><br><br>
    <h1>Painel do Visitante</h1>
</div>

    <nav>
      <div class="logo">
        <img src="assets/img/logospm1.jpeg" alt="Logo da Plataforma">
      </div>
      <ul class="menu">
        <li><a href="#H">Anuncie Aqui</a></li>
        <li><a href="#">Ir para os encartes</a></li>

      </ul>
    </nav>
  </header>


  

  <main>
    <section class="encartes">
      <!-- Exibição dos encartes dos supermercados -->
      <!-- Aqui você pode adicionar as miniaturas, títulos, descrições e botão de detalhes -->
    </section>

 

    <section class="descricao">
      <!-- Espaço para a descrição da plataforma -->
      <!-- Texto com informações sobre a plataforma -->
    </section>
  </main>
  <main>
  <h2 class="h2-destaque">Destaques da Semana</h2>
    <section class="encartes">
      <!-- Exemplo de um card de encarte -->
      <div class="card">
  
      <?php
// Recupera os dados do banco de dados
$sql = "SELECT link_imagem FROM supermercado WHERE id = 1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

// Exibe a imagem
if ($resultado && !empty($resultado['link_imagem'])) {
    echo "<img src='" . $resultado['link_imagem'] . "' alt='Imagem do encarte'>";
} else {
    echo "Imagem não encontrada";
}
?>

       
        <div class="card-info">
          <h3>DB Supermercado</h3>
          <p>Ofertas desta semana.</p>
          <a href="#" class="btn-detalhes">Ver Detalhes</a>
        </div>
      </div>

      <div class="card">
      <?php
// Recupera os dados do banco de dados
$sql = "SELECT link_imagem FROM supermercado WHERE id = 2";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

// Exibe a imagem
if ($resultado && !empty($resultado['link_imagem'])) {
    echo "<img src='" . $resultado['link_imagem'] . "' alt='Imagem do encarte'>";
} else {
    echo "Imagem não encontrada";
}
?>
        <div class="card-info">
          <h3>Carrefour Supermercado</h3>
          <p>Descrição do encarte ou ofertas desta semana.</p>
          <a href="#" class="btn-detalhes">Ver Detalhes</a>
        </div>
      </div>
      <div class="card">
      <?php
// Recupera os dados do banco de dados
$sql = "SELECT link_imagem FROM supermercado WHERE id = 3";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

// Exibe a imagem
if ($resultado && !empty($resultado['link_imagem'])) {
    echo "<img src='" . $resultado['link_imagem'] . "' alt='Imagem do encarte'>";
} else {
    echo "Imagem não encontrada";
}
?>
        <div class="card-info">
          <h3>Attack Supermercado</h3>
          <p>Descrição do encarte ou ofertas desta semana.</p>
          <a href="#" class="btn-detalhes">Ver Detalhes</a>
        </div>
      </div>
      <div class="card">
      <?php
// Recupera os dados do banco de dados
$sql = "SELECT link_imagem FROM supermercado WHERE id = 4";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

// Exibe a imagem
if ($resultado && !empty($resultado['link_imagem'])) {
    echo "<img src='" . $resultado['link_imagem'] . "' alt='Imagem do encarte'>";
} else {
    echo "Imagem não encontrada";
}
?>
        <div class="card-info">
          <h3>Rodrigues Supermercado</h3>
          <p>Descrição do encarte ou ofertas desta semana.</p>
          <a href="#" class="btn-detalhes">Ver Detalhes</a>
        </div>
      </div>

      <div class="card">
      <?php
// Recupera os dados do banco de dados
$sql = "SELECT link_imagem FROM supermercado WHERE id = 5";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

// Exibe a imagem
if ($resultado && !empty($resultado['link_imagem'])) {
    echo "<img src='" . $resultado['link_imagem'] . "' alt='Imagem do encarte'>";
} else {
    echo "Imagem não encontrada";
}
?>
        <div class="card-info">
          <h3>Vitória Supermercado</h3>
          <p>Descrição do encarte ou ofertas desta semana.</p>
          <a href="#" class="btn-detalhes">Ver Detalhes</a>
        </div>
      </div>
      <!-- Adicione mais cards semelhantes para outros encartes -->
    </section>


    <section class="supermarkets">
  <h2>Supermercados Parceiros</h2>
  <ul class="supermarkets-list">
    <li>Supermercados DB</li>
    <li>Supermercado Carrefour</li>
    <li>Supermercado Attack</li>
    <!-- Adicione mais supermercados conforme necessário -->
  </ul>
</section>







<section class="navegacao-encartes">
  <h2>Navegação por Encartes</h2>
  <!-- Conteúdo da navegação por encartes aqui -->
</section>



<section class="busca-ofertas">
  <h2>Busca de Ofertas</h2>
  <!-- Conteúdo da busca de ofertas aqui -->
</section>


<section class="mapa">
      <!-- Mapa de localização -->
      <!-- Adicione um mapa interativo usando Google Maps API ou outra ferramenta -->
      <div id='map'></div>

      

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
  var map = L.map('map').setView([-3.1190, -60.0212], 12); // [latitude, longitude], zoom

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
  }).addTo(map);
</script>    </section>


  </main>



  
  <footer>
    <ul class="links">
      <li><a href="#">Sobre a Empresa</a></li>
      <li><a href="#">Termos de Uso</a></li>
      <li><a href="#">Política de Privacidade</a></li>
      <li><a href="#">Contato</a></li>
    </ul>
    <div class="redes-sociais">
      <!-- Ícones/link para redes sociais -->
    </div>
  </footer>
</body>
</html>