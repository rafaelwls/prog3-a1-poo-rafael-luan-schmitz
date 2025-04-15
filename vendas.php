<?php
// tabela com dados falsos para exbicição
require_once 'classes/Sessao.php';
Sessao::iniciar();
if (!Sessao::get('usuario')) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Vendas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Histórico de Vendas</h1>
    <table>
        <thead>
            <tr><th>Produto</th><th>Quantidade</th><th>Valor (R$)</th></tr>
        </thead>
        <tbody>
            <tr><td>Notebook</td><td>5</td><td>12.500,00</td></tr>
            <tr><td>Mouse Gamer</td><td>10</td><td>750,00</td></tr>
            <tr><td>Monitor 27"</td><td>3</td><td>3.600,00</td></tr>
            <tr><td>Teclado Mecânico</td><td>8</td><td>1.600,00</td></tr>
            <tr><td>SSD 1TB</td><td>6</td><td>3.000,00</td></tr>
            <tr><td>HD Externo</td><td>7</td><td>1.400,00</td></tr>
            <tr><td>Webcam</td><td>4</td><td>800,00</td></tr>
            <tr><td>Fone Bluetooth</td><td>9</td><td>1.800,00</td></tr>
            <tr><td>Impressora</td><td>2</td><td>2.000,00</td></tr>
            <tr><td>Cadeira Gamer</td><td>1</td><td>1.500,00</td></tr>
        </tbody>
    </table>
    <br><a class="btn" href="dashboard.php">Voltar ao Painel</a>
</div>
</body>
</html>
