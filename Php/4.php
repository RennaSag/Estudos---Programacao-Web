<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP e HTML</title>
</head>
<body>

<?php
$primeiro_nome = "Marcos";
$nome_do_meio = "Alves";
$sobrenome = "Vieira";
?>

<h1>Dados do usuário</h1>

<p>Nome completo: 
<?php echo $primeiro_nome . " " . $nome_do_meio . " " . $sobrenome; ?>
</p>

<?php
$idade = 25;
?>

<p>Idade: <?php echo $idade; ?> anos</p>

<?php
echo "<p>Bem-vindo, " . $primeiro_nome . "!</p>";
?>

</body>
</html>
