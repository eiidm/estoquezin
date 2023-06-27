<?php
    include "../utils/conexao.php"; 

    //dados enviados do script exclui_prod_chamada_confirma_exclusao_logica.php
    $id = $_POST['id'];
    
    // Padrão para data no servidor do kinghost está americano (se atentar!!)
    $data=date('m/d/Y'); //'Y' (maiúsculo) para ano com 4 dígitos
    //$data=date('d/m/Y');

    //inserida a data de exclusao do produto para histórico
    $sql="update material
            set excluido = 's', data_exclusao = '$data' 
        WHERE id = $id";

    //echo $sql;

    $resultado_exclusao=pg_query($conecta);
    $qtde=mysqli_affected_rows($resultado_exclusao);

    if ($qtde > 0 )
        echo "<script type='text/javascript'>alert('Exclusão OK !!!')</script>";
    else
        echo "<script type='text/javascript'>alert('Erro na exclusão !!!')</script>";

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=pesquisar_produtos_front.php'>";
?>
