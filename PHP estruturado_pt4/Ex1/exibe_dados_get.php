<?php
// exibe_dados_get.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dados Cadastrados (GET)</title>
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
    </style>
</head>
<body>
    <h2>Dados Cadastrados - Método GET</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $campos_obrigatorios = ['nome', 'email', 'sexo', 'estado_civil', 'rua', 'bairro', 'cidade', 'estado', 'cep'];
        $todos_preenchidos = true;

        foreach ($campos_obrigatorios as $campo) {
            if (empty($_GET[$campo])) {
                $todos_preenchidos = false;
                break;
            }
        }

        if ($todos_preenchidos) {
            echo "<div class='dados-grupo'>";
            echo "<h3>Dados Pessoais</h3>";
            echo "<p><strong>Nome:</strong> " . htmlspecialchars($_GET['nome']) . "</p>";
            echo "<p><strong>E-mail:</strong> " . htmlspecialchars($_GET['email']) . "</p>";
            echo "<p><strong>Sexo:</strong> " . htmlspecialchars($_GET['sexo']) . "</p>";
            echo "<p><strong>Estado Civil:</strong> " . htmlspecialchars($_GET['estado_civil']) . "</p>";
            echo "</div>";

            echo "<div class='dados-grupo'>";
            echo "<h3>Endereço</h3>";
            echo "<p><strong>Rua:</strong> " . htmlspecialchars($_GET['rua']) . "</p>";
            echo "<p><strong>Bairro:</strong> " . htmlspecialchars($_GET['bairro']) . "</p>";
            echo "<p><strong>Cidade:</strong> " . htmlspecialchars($_GET['cidade']) . "</p>";
            echo "<p><strong>Estado:</strong> " . htmlspecialchars($_GET['estado']) . "</p>";
            echo "<p><strong>CEP:</strong> " . htmlspecialchars($_GET['cep']) . "</p>";
            echo "</div>";

            if (!empty($_GET['obs'])) {
                echo "<div class='dados-grupo'>";
                echo "<h3>Observações</h3>";
                echo "<p>" . htmlspecialchars($_GET['obs']) . "</p>";
                echo "</div>";
            }

            echo "<a href='meu_formulario_get.php'>Voltar para o formulário</a>";
        } else {
            echo "<p>Por favor, preencha todos os campos obrigatórios.</p>";
            echo "<a href='meu_formulario_get.php'>Voltar para o formulário</a>";
        }
    } else {
        echo "<p>Método de acesso inválido.</p>";
        echo "<a href='meu_formulario_get.php'>Voltar para o formulário</a>";
    }
    ?>
</body>
</html>