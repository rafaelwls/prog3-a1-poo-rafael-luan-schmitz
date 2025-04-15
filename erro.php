<?php
$msg = isset($_GET['msg']) ? $_GET['msg'] : 'Ocorreu um erro.';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Erro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="erp-container">
        <div class="erp-header">
            <h1>Erro de Autenticação</h1>
            <p><?php echo htmlspecialchars($msg); ?></p>
        </div>
        <div style="text-align: center; margin-top: 30px;">
            <a href="login.php" class="btn">Voltar ao Login</a>
        </div>
    </div>
</body>
</html>
