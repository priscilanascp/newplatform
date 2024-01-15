<?php 
// Iniciar a sessão


// Verificar se a sessão de usuário não está definida ou está vazia
if(!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])){
    header('Location: login.php');
    exit();
}
?>
