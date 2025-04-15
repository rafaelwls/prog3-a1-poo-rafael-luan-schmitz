<?php
require_once 'classes/Usuario.php';
require_once 'classes/Autenticador.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitiza e valida os dados
    $nome  = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    if ($nome && $email && $senha) {
        // Cria o objeto Usuario e registra
        $usuario = new Usuario($nome, $email, $senha);
        Autenticador::registrar($usuario);
        header('Location: login.php');
        exit;
    } else {
        echo "Dados inválidos. Por favor, <a href='cadastro.php'>tente novamente</a>.";
    }
} else {
    header('Location: cadastro.php');
    exit;
}
?>
