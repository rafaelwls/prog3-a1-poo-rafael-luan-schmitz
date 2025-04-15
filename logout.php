<?php
require_once 'classes/Sessao.php';
Sessao::iniciar();

// Destrói a sessão
Sessao::destruir();

// Remove o cookie do e-mail, se existir
if (isset($_COOKIE['email_usuario'])) {
    setcookie('email_usuario', '', time() - 3600);
}

header('Location: login.php');
exit;
?>
