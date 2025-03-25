<?php
// exibe_dados_post.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dados Cadastrados (POST)</title>
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
    <h2>Dados Cadastrados - Método POST</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $campos_obrigatorios = ['nome', 'email', 'sexo', 'estado_civil', 'rua', 'bairro', 'cidade', 'estado', 'cep'];
        $todos_preenchidos = true;

        foreach ($campos_obrigatorios as $campo) {
            if (empty($_POST[$campo])) {
                $todos_preenchidos = false;
                break;
            }
        }

        if ($todos_preenchidos) {
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
                echo "<h3>Observacoes</h3>";
                echo "<p>" . htmlspecialchars($_POST['obs']) . "</p>";
                echo "</div>";
            }

            echo "<a href='meu_formulario_post.php'>Voltar para o formulario</a>";
        } else {
            echo "<p>Por favor, preencha todos os campos obrigatorios.</p>";
            echo "<a href='meu_formulario_post.php'>Voltar para o formulario</a>";
        }
    } else {
        echo "<p>Metodo de acesso invalido.</p>";
        echo "<a href='meu_formulario_post.php'>Voltar para o formulario</a>";
    }
    ?>
</body>
</html>