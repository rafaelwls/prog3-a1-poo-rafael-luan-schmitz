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
    <title>Estoque</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Estoque de Produtos</h1>
    <table>
        <thead>
            <tr><th>Produto</th><th>Quantidade em Estoque</th></tr>
        </thead>
        <tbody>
            <tr><td>Notebook</td><td>15</td></tr>
            <tr><td>Mouse Gamer</td><td>30</td></tr>
            <tr><td>Monitor 27"</td><td>12</td></tr>
            <tr><td>Teclado Mecânico</td><td>20</td></tr>
            <tr><td>SSD 1TB</td><td>25</td></tr>
            <tr><td>HD Externo</td><td>18</td></tr>
            <tr><td>Webcam</td><td>22</td></tr>
            <tr><td>Fone Bluetooth</td><td>35</td></tr>
            <tr><td>Impressora</td><td>5</td></tr>
            <tr><td>Cadeira Gamer</td><td>3</td></tr>
        </tbody>
    </table>
    <br><a class="btn" href="dashboard.php">Voltar ao Painel</a>
</div>
</body>
</html>
