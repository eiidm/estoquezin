<?php
    include("../utils/conexao.php");

    $docfiscal=$_POST["docfiscal"];
    $fornecedor=$_POST["fornecedor"];
    $data=$_POST["data"];
    $produto=$_POST["produto"];
    $valor_un=$_POST["valor_un"];
    $qtde=$_POST["qtde"];
    $valor_total= $valor_un*$qtde;

    $sql=$conecta->query("INSERT INTO nometabelaentrada
    (documento_compra, fornecedor, data, material , valor_unitario, quantidade, valor_total)
    VALUES (
    '{$docfiscal}', '{$fornecedor}', '{$data}', '{$produto}', '{$valor_un}', 
    '{$qtde}', '{$valor_total}')");

    if ($sql==true)
    {
        echo '<script language="javascript">';
        echo "alert('Entrada salva com sucesso!')";
        echo '</script>';	

        header("Location: relatorio_front.php");
    }   
    else
    {
        echo '<script language="javascript">';
        echo "alert('Erro na gravação da entrada!')";
        echo '</script>';	
    }

   mysqli_close($conecta);
?>