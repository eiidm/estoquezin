<?php

include ("../utils/conexao.php");

$sql=$conecta->query("DELETE FROM nometabelafornecedor WHERE id_fornecedor=".$_REQUEST["id_fornecedor"]);


if ($sql==true)
{
    echo '<script language="javascript">';
    echo "alert('Fornecedor excluido com sucesso!')";
    echo '</script>';	

    header("Location: alterar_fornecedores_front.php");
}   
else
{
     echo '<script language="javascript">';
    echo "alert('Erro na exclusão do fornecedor!')";
     echo '</script>';	
}

mysqli_close($conecta);



?>