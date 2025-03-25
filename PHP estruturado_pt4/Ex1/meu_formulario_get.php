<?php
// meu_formulario_get.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Clientes (GET)</title>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <h2>Cadastro de Clientes - Método GET</h2>
    <form action="exibe_dados_get.php" method="get">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Sexo:</label>
            <input type="radio" id="sexo_masc" name="sexo" value="masculino" required>
            <label for="sexo_masc">Masculino</label>
            <input type="radio" id="sexo_fem" name="sexo" value="feminino">
            <label for="sexo_fem">Feminino</label>
            <input type="radio" id="sexo_outro" name="sexo" value="outro">
            <label for="sexo_outro">Outro</label>
            <input type="radio" id="sexo_naoinf" name="sexo" value="nao_informar">
            <label for="sexo_naoinf">Prefiro não informar</label>
        </div>

        <div class="form-group">
            <label for="estado_civil">Estado Civil:</label>
            <select id="estado_civil" name="estado_civil" required>
                <option value="" selected>Selecione...</option>
                <option value="casado">Casado</option>
                <option value="solteiro">Solteiro</option>
                <option value="divorciado">Divorciado</option>
                <option value="viuvo">Viúvo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <div>
                <label for="rua">Rua:</label>
                <input type="text" id="rua" name="rua" required>

                <label for="bairro">Bairro:</label>
                <input type="text" id="bairro" name="bairro" required>

                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" required>

                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" maxlength="2" required>

                <label for="cep">CEP:</label>
                <input type="text" id="cep" name="cep" maxlength="10" required>
            </div>
        </div>

        <div class="form-group">
            <label for="obs">Observações:</label>
            <textarea id="obs" name="obs" rows="10" cols="50"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" name="salvar" value="Salvar">
            <input type="reset" name="limpar" value="Limpar">
        </div>
    </form>
</body>
</html>