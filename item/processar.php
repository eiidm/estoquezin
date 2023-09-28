<?php
    $sql=$conecta->query("SELECT * FROM nometabelafornecedor");

    if (!$sql) {
        die("Erro na consulta ao banco de dados: " . mysqli_error($conexao));
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fornecedor_selecionado'])) {
        $fornecedor_selecionado = $_POST['fornecedor_selecionado'];

        // Agora você pode fazer o que quiser com os produtos selecionados, por exemplo, inseri-los em outra tabela ou realizar alguma outra ação.

        // Exemplo: inserir os produtos selecionados em uma tabela "produtos_selecionados"
        foreach ($fornecedor_selecionado as $fornecedor_id) {
            $sql=$conecta->query("INSERT INTO entrada(fornecedor_id) VALUES ('{$fornecedor_id}')");
            if (!$sql) {
                die("Erro ao inserir fornecedor selecionado: " . mysqli_error($conexao));
            }
        }

        echo "Fornecedor selecionado com sucesso!";
    }
?>