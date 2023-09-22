<?php
include ("../utils/conexao.php");

$valoraquisicao=$_POST["valoraquisicao"];
$valorvenda=$_POST["valorvenda"];
$saldoitem=$_POST["saldoitem"];

$sql=$conecta->query("INSERT INTO item (valoraquisicao. valorvenda, saldo) VALUES ('{$valoraquisicao}','{$valorvenda}', '{$saldoitem}')");

if ($sql==true)
{
    echo '<script language="javascript">';
    echo "alert('Empresa salvo com sucesso!')";
    echo '</script>';	

    header("Location: cadastro_grupo_front.php");
}   
else
{
    echo '<script language="javascript">';
    echo "alert('Erro na gravação da empresa!')";
    echo '</script>';	
}

// Fecha a conexão com o MySQL
mysqli_close($conecta);

?>