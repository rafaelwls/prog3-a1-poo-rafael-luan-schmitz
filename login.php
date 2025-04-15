<?php
$email_cookie = isset($_COOKIE['email_usuario']) ? $_COOKIE['email_usuario'] : "";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="processa_login.php" method="post">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" value="<?php echo $email_cookie; ?>" required>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required>

            <label>
                <input type="checkbox" name="lembrar_email" value="sim">
                Lembrar e-mail
            </label>

            <button type="submit">Entrar</button>
        </form>
        <br>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>
