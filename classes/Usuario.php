<?php
class Usuario {
    // atributos privados
    private $nome;
    private $email;
    private $senha;

    // construtor que recebe nome, e-mail e senha
    public function __construct($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        // Armazena a senha hasheada
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    // retorna o nome do usuário
    public function getNome() {
        return $this->nome;
    }

    // retorna o e-mail do usuário
    public function getEmail() {
        return $this->email;
    }

    // verifica se a senha informada confere com a senha armazenada
    public function verificarSenha($senha) {
        return password_verify($senha, $this->senha);
    }
}
?>
