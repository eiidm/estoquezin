<?php
    $query = "SELECT * FROM fornecedores";
    $resultado = mysqli_query($conexao, $query);

    if (!$resultado) {
        die("Erro na consulta ao banco de dados: " . mysqli_error($conexao));
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fornecedor_selecionado'])) {
        $fornecedor_selecionado = $_POST['fornecedor_selecionado'];

        // Agora você pode fazer o que quiser com os produtos selecionados, por exemplo, inseri-los em outra tabela ou realizar alguma outra ação.

        // Exemplo: inserir os produtos selecionados em uma tabela "produtos_selecionados"
        foreach ($fornecedor_selecionado as $fornecedor_id) {
            $query = "INSERT INTO fornecedor_selecionado (fornecedor_id) VALUES ('$fornecedor_id')";
            $resultado = mysqli_query($conexao, $query);
            if (!$resultado) {
                die("Erro ao inserir fornecedor selecionado: " . mysqli_error($conexao));
            }
        }

        echo "forn selecionados foram processados com sucesso!";
    }
?>