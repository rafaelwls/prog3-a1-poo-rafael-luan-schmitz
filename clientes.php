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
    <title>Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Lista de Clientes</h1>
    <table>
        <thead>
            <tr><th>Nome</th><th>CPF</th><th>Telefone</th></tr>
        </thead>
        <tbody>
            <tr><td>Maria Silva</td><td>123.456.789-00</td><td>(49) 99999-1111</td></tr>
            <tr><td>João Costa</td><td>234.567.890-11</td><td>(49) 99999-2222</td></tr>
            <tr><td>Lucas Martins</td><td>345.678.901-22</td><td>(49) 99999-3333</td></tr>
            <tr><td>Ana Souza</td><td>456.789.012-33</td><td>(49) 99999-4444</td></tr>
            <tr><td>Pedro Lima</td><td>567.890.123-44</td><td>(49) 99999-5555</td></tr>
            <tr><td>Juliana Alves</td><td>678.901.234-55</td><td>(49) 99999-6666</td></tr>
            <tr><td>Fernando Rocha</td><td>789.012.345-66</td><td>(49) 99999-7777</td></tr>
            <tr><td>Camila Dias</td><td>890.123.456-77</td><td>(49) 99999-8888</td></tr>
            <tr><td>Eduardo Ramos</td><td>901.234.567-88</td><td>(49) 99999-9999</td></tr>
            <tr><td>Larissa Pinto</td><td>012.345.678-99</td><td>(49) 99999-0000</td></tr>
        </tbody>
    </table>
    <br><a class="btn" href="dashboard.php">Voltar ao Painel</a>
</div>
</body>
</html>
