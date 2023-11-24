<?php

include ("../utils/conexao.php");

$sql=$conecta->query("DELETE FROM nometabelaempresa WHERE id_empresa=".$_REQUEST["id_empresa"]);


if ($sql==true)
{
    echo '<script language="javascript">';
    echo "alert('Empresa excluida com sucesso!')";
    echo '</script>';	

    header("Location: alterar_empresas_front.php");
}   
else
{
     echo '<script language="javascript">';
    echo "alert('Erro na exclusão da empresa!')";
     echo '</script>';	
}

mysqli_close($conecta);



?>