<?php
session_start();

if (isset($_COOKIE['lembrar_usuario'])) {
    setcookie('lembrar_usuario', '', time() - 3600, '/');
}
if (isset($_COOKIE['lembrar_senha'])) {
    setcookie('lembrar_senha', '', time() - 3600, '/'); 
}

$_SESSION['sessao_finalizada'] = "Sessão finalizada com sucesso!";

session_destroy();

header('Location: login.php');
exit;
?>