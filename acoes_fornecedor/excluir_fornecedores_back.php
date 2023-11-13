<?php

include ("../utils/conexao.php");

$sql=$conecta->query("DELETE FROM nometabelafornecedor WHERE id_fornecedor=".$_REQUEST["id_fornecedor"]);


if ($sql==true)
{
    echo '<script language="javascript">';
    echo "alert('Forncedor excluido com sucesso!')";
    echo '</script>';	

    header("Location: editar_fornecedor.php");
}   
else
{
     echo '<script language="javascript">';
    echo "alert('Erro na exclusão do forncedor!')";
     echo '</script>';	
}

mysqli_close($conecta);



?>