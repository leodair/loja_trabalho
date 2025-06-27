<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="loja.css">
    <title>leodair_construções</title>
</head>
<body>
   <a href="logout.php">Sair</a>

   
    <nav class="navbar">
    <div class="logo">LEODAIR_CONSTRU</div>
    <ul class="nav-links">
        <li><a href="index.php">Início</a></li>
        <li><a href="produtos.php">Produtos</a></li>
        <li><a href="vender.php">Vender</a></li>
        <li><a href="carrinho.php">Carrinho</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
    </nav>

</body>
</html>

<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>