<?php
include ("../utils/conexao.php");

$nomegrupo=$_POST["nomegrupo"];

$sql=$conecta->query("INSERT INTO nometabelagrupo (nomegrupo) VALUES ('{$nomegrupo}')");

if ($sql==true)
{
    echo '<script language="javascript">';
    echo "alert('Grupo de materiais salvo com sucesso!')";
    echo '</script>';	

    header("Location: cadastro_grupo_front.php");
}   
else
{
    echo '<script language="javascript">';
    echo "alert('Erro na gravação do grupo!')";
    echo '</script>';	
}

// Fecha a conexão com o MySQL
mysqli_close($conecta);

?>
