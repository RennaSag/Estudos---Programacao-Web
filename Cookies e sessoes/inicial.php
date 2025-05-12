<?php
session_start();

if(!isset($_SESSION['logado']) || $_SESSION['logado'] !== true){
    header('Location: login.php');
    exit;
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Sistema</title>
</head>
<body>
<p>Bem vindo, admin!<br><a href="">Finalizar sessão</a></p>



</body>
</html>