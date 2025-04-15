<?php
require_once 'classes/Autenticador.php';
require_once 'classes/Sessao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    if ($email && $senha) {
        $usuario = Autenticador::login($email, $senha);
        if ($usuario) {
            Sessao::iniciar();
            // armazena dados na sessão
            Sessao::set('usuario', $usuario->getNome());
            Sessao::set('email', $usuario->getEmail());

            // cria cookie se opção de manter for marcada, se não, é removido
            if (isset($_POST['lembrar_email']) && $_POST['lembrar_email'] === 'sim') {
                setcookie('email_usuario', $usuario->getEmail(), time() + 3600);
            } else {
                setcookie('email_usuario', '', time() - 3600);
            }
            header('Location: dashboard.php');
            exit;
        } else {
            header('Location: erro.php?msg=Login+inválido.');
            exit;
        }
    } else {
        header('Location: erro.php?msg=Dados+inválidos.');
        exit;
    }
} else {
    header('Location: login.php');
    exit;
}
?>
