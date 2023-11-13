<?php

include ("../utils/conexao.php");

$sql=$conecta->query("DELETE FROM nometabelaempresa WHERE id_fornecedor=".$_REQUEST["id_empresa"]);


if ($sql==true)
{
    echo '<script language="javascript">';
    echo "alert('Forncedor excluido com sucesso!')";
    echo '</script>';	

    header("Location: alterar_empresas_front.php");
}   
else
{
     echo '<script language="javascript">';
    echo "alert('Erro na exclusão do forncedor!')";
     echo '</script>';	
}

mysqli_close($conecta);



?>