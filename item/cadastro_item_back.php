<?php
include ("../utils/conexao.php");

$nomeitem=$_POST["nomeitem"];
$codigo=$_POST["codigo"];
$descricao=$_POST["descricao"];
$valoraquisicao=$_POST["valoraquisicao"];
$valorvenda=$_POST["valorvenda"];
$qtde_estoque=$_POST["qtde_estoque"];
$qtde_vendida=$_POST["qtde_vendida"];
$saldoitem=$qtde_estoque-$qtde_vendida; 

$sql=$conecta->query("INSERT INTO item (nomeitem, codigo, descricao, valoraquisicao, valorvenda, quantidade_estoque, quantidade_vendida, saldo)
 VALUES ('{$nomeitem}', '{$descricao}', '{$codigo}', '{$valoraquisicao}','{$valorvenda}', '{$qtde_estoque}', '{$qtde_vendida}', '{$saldoitem}')");

if ($sql==true)
{
    echo '<script language="javascript">';
    echo "alert('Empresa salvo com sucesso!')";
    echo '</script>';	

    header("Location: cadastro_item_front.php");
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