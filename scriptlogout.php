<?php 
session_start();

session_destroy(); //Encerrar as sessões abertas 
header('Location:index.php'); //Redirecionando o usuário para home

?>