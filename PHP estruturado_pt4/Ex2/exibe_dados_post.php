<?php


function validarEmail($email) {
 
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function validarEstadoBrasileiro($estado) {
    // Lista de estados brasileiros válidos
    $estados_validos = [
        'AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 
        'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 
        'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'
    ];
    
    return in_array(strtoupper($estado), $estados_validos);
}

function validarCEP($cep) {
    
    return preg_match('/^\d{5}-\d{3}$/', $cep) === 1;
}


$erros = [];


$campos_obrigatorios = ['nome', 'email', 'sexo', 'estado_civil', 'rua', 'bairro', 'cidade', 'estado', 'cep'];

foreach ($campos_obrigatorios as $campo) {
    if (empty($_POST[$campo])) {
        $erros[] = "O campo " . ucfirst(str_replace('_', ' ', $campo)) . " é obrigatório.";
    }
}


if (!empty($_POST['email']) && !validarEmail($_POST['email'])) {
    $erros[] = "O endereço de e-mail informado não é válido.";
}

if (!empty($_POST['estado_civil']) && $_POST['estado_civil'] === '') {
    $erros[] = "Selecione uma opção válida de estado civil.";
}

if (!empty($_POST['estado']) && !validarEstadoBrasileiro($_POST['estado'])) {
    $erros[] = "O estado informado não é válido. Use a sigla de um estado brasileiro.";
}

if (!empty($_POST['cep']) && !validarCEP($_POST['cep'])) {
    $erros[] = "O CEP informado não está no formato correto (xxxxx-xxx).";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dados Cadastrados (POST) - Validação</title>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .dados-grupo {
            margin-bottom: 15px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
        .erro {
            color: red;
            margin-bottom: 15px;
            border: 1px solid red;
            padding: 10px;
            background-color: #ffeeee;
        }
    </style>
</head>
<body>
    <h2>Dados Cadastrados - Método POST</h2>
    
    <?php
    if (!empty($erros)) {
        echo "<div class='erro'>";
        echo "<h3>Erros de Validação:</h3>";
        echo "<ul>";
        foreach ($erros as $erro) {
            echo "<li>" . htmlspecialchars($erro) . "</li>";
        }
        echo "</ul>";
        echo "<a href='meu_formulario_post.php'>Voltar para o formulário</a>";
        echo "</div>";
    } else {
        echo "<div class='dados-grupo'>";
        echo "<h3>Dados Pessoais</h3>";
        echo "<p><strong>Nome:</strong> " . htmlspecialchars($_POST['nome']) . "</p>";
        echo "<p><strong>E-mail:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
        echo "<p><strong>Sexo:</strong> " . htmlspecialchars($_POST['sexo']) . "</p>";
        echo "<p><strong>Estado Civil:</strong> " . htmlspecialchars($_POST['estado_civil']) . "</p>";
        echo "</div>";

        echo "<div class='dados-grupo'>";
        echo "<h3>Endereço</h3>";
        echo "<p><strong>Rua:</strong> " . htmlspecialchars($_POST['rua']) . "</p>";
        echo "<p><strong>Bairro:</strong> " . htmlspecialchars($_POST['bairro']) . "</p>";
        echo "<p><strong>Cidade:</strong> " . htmlspecialchars($_POST['cidade']) . "</p>";
        echo "<p><strong>Estado:</strong> " . htmlspecialchars($_POST['estado']) . "</p>";
        echo "<p><strong>CEP:</strong> " . htmlspecialchars($_POST['cep']) . "</p>";
        echo "</div>";

        if (!empty($_POST['obs'])) {
            echo "<div class='dados-grupo'>";
            echo "<h3>Observações</h3>";
            echo "<p>" . htmlspecialchars($_POST['obs']) . "</p>";
            echo "</div>";
        }

        echo "<a href='meu_formulario_post.php'>Voltar para o formulário</a>";
    }
    ?>
</body>
</html>