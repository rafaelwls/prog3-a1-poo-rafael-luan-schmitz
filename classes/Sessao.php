<?php
class Sessao {
    // inicia a sessão se não estiver iniciada
    public static function iniciar() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    // define um valor na sessão
    public static function set($chave, $valor) {
        $_SESSION[$chave] = $valor;
    }

    // recupera um valor da sessão e retorna null se não existir
    public static function get($chave) {
        return isset($_SESSION[$chave]) ? $_SESSION[$chave] : null;
    }

    // destroi a sessão
    public static function destruir() {
        session_destroy();
    }
}
?>
