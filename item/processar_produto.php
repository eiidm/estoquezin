<?php
    $sql=$conecta->query("SELECT * FROM nomematerial");

    if (!$sql) {
        die("Erro na consulta ao banco de dados: " . mysqli_error($conexao));
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['produto_selecionado'])) {
        $produto_selecionado = $_POST['produto_selecionado'];

        // Agora você pode fazer o que quiser com os produtos selecionados, por exemplo, inseri-los em outra tabela ou realizar alguma outra ação.

        // Exemplo: inserir os produtos selecionados em uma tabela "produtos_selecionados"
        foreach ($produto_selecionado as $id) {
            $sql=$conecta->query("INSERT INTO entrada(id) VALUES ('{$id}')");
            if (!$sql) {
                die("Erro ao inserir produto selecionado: " . mysqli_error($conexao));
            }
        }

        echo "Produto selecionado com sucesso!";
    }
?>