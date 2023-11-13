<?php

include ("../utils/conexao.php");

$sql=$conecta->query("DELETE FROM nometabelagrupo WHERE id_grupo=".$_REQUEST["id_grupo"]);


if ($sql==true)
{
    echo '<script language="javascript">';
    echo "alert('Forncedor excluido com sucesso!')";
    echo '</script>';	

    header("Location: alterar_grupos_front.php");
}   
else
{
     echo '<script language="javascript">';
    echo "alert('Erro na exclusão do forncedor!')";
     echo '</script>';	
}

mysqli_close($conecta);



?>