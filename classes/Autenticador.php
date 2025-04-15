<?php
require_once 'Sessao.php';
require_once 'Usuario.php';

class Autenticador {
    // registra um usuário (armazenado na sessão)
    public static function registrar(Usuario $usuario) {
        Sessao::iniciar();
        if (!isset($_SESSION['usuarios'])) {
            $_SESSION['usuarios'] = array();
        }
        $_SESSION['usuarios'][] = serialize($usuario);
    }

    // procura e retorna um objeto Usuario pelo e-mail informado
    public static function encontrarUsuarioPorEmail($email) {
        Sessao::iniciar();
        if (!isset($_SESSION['usuarios'])) {
            return null;
        }
        foreach ($_SESSION['usuarios'] as $usuario_serializado) {
            $usuario = unserialize($usuario_serializado);
            if ($usuario->getEmail() === $email) {
                return $usuario;
            }
        }
        return null;
    }

    // efetua o login: verifica se o usuário existe e se a senha confere
    public static function login($email, $senha) {
        $usuario = self::encontrarUsuarioPorEmail($email);
        if ($usuario && $usuario->verificarSenha($senha)) {
            return $usuario;
        }
        return false;
    }
}
?>
