<?php

session_start();

$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
$lembrar = isset($_POST['lembrar']) ? true : false;

if($usuario === 'admin' && $senha === '123456'){
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = $usuario;

    if($lembrar){
        setcookie('lembrar_usuario', $usuario, time() + 3600);
        setcookie('lembrar_senha', $senha, time() + 3600);
    }

    header('Location: inicial.php');
    exit;
}else{
    $_SESSION['erro_login'] = "Digitou coisa errada bro >:(";

    header('Location: inicial.php');
    exit;
}

?>