<?php
require_once 'classes/Sessao.php';
Sessao::iniciar();

if (!Sessao::get('usuario')) {
    header('Location: login.php');
    exit;
}

$nome  = Sessao::get('usuario');
$email = isset($_COOKIE['email_usuario']) ? $_COOKIE['email_usuario'] : '';

// geração aleatória de dados para a tela
$vendas = rand(1000, 10000);
$estoque = rand(50, 500);
$clientes = rand(100, 1000);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard ERP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="erp-container">
        <div class="erp-header">
            <h1>Bem-vindo(a), <?php echo htmlspecialchars($nome); ?>!</h1>
            <p>Sistema ERP - Painel de Controle</p>
        </div>
        <div class="erp-menu">
            <a class="btn" href="clientes.php">Clientes</a>
            <a class="btn" href="vendas.php">Vendas</a>
            <a class="btn" href="estoque.php">Estoque</a>
            <a class="btn" href="logout.php">Sair</a>
        </div>
        <div class="erp-content">
            <div class="erp-box">
                <h2>Vendas</h2>
                <p>Total: R$ <?php echo number_format($vendas, 2, ',', '.'); ?></p>
            </div>
            <div class="erp-box">
                <h2>Estoque</h2>
                <p>Itens disponíveis: <?php echo $estoque; ?></p>
            </div>
            <div class="erp-box">
                <h2>Clientes</h2>
                <p>Cadastrados: <?php echo $clientes; ?></p>
            </div>
        </div>
        <?php if ($email !== ""): ?>
            <p style="text-align: center; margin-top: 20px;">Seu e-mail salvo: <?php echo htmlspecialchars($email); ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
