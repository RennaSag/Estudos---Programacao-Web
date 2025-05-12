<?php

session_start();

if(isset($_COOKIE['lembrar_usuario']) && isset($_COOKIE['lembrar_senha'])) {
    $usuario = $_COOKIE['lembrar_usuario'];
    $senha = $_COOKIE['lembrar_senha'];

    if ($usuario === 'admin' && $senha === '123456') {
        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = $usuario;
        
        header('Location: inicial.php');
        exit;
    }
}

$mensagem_erro = '';
if (isset($_SESSION['erro_login'])) {
    $mensagem_erro = $_SESSION['erro_login'];
    unset($_SESSION['erro_login']);
}

$mensagem_sessao = '';
if (isset($_SESSION['sessao_finalizada'])) {
    $mensagem_sessao = $_SESSION['sessao_finalizada'];
    unset($_SESSION['sessao_finalizada']);
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
<p>Bem vindo!<br>Entre com suas credenciais para acessar o sistema</p>
<br>

<form action="processa_login.php" method="post">
<label>Usuário: <input type="text" name="usuario"></label><br>
<label>Senha: <input type="password" name="senha"></label><br>
<label><input type="checkbox" name="lembrar"> Lembrar usuário/senha</label><br><br>
<input type="submit" value="Entrar">
</form>

</body>
</html>