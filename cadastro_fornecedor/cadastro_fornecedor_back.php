<?php
include ("../utils/conexao.php"); 

$nomefornecedor=$_POST["nomefornecedor"];
$razaosocial=$_POST["razaosocial"];
$contato=$_POST["contato"];
$cnpj=$_POST["cnpj"];
$inscricao=$_POST["inscricao"];
$number=$_POST["number"];

$sql="INSERT INTO nometabelafornecedor
         (nomefornecedor, razaosocial, contato, cnpj, inscricao, number)
         VALUES (
           '{$nomefornecedor}',  '{$razaosocil}',  '{$contato}', '{$cnpj}', '{$inscricao}', '{$number}')";


$resultado_fornc=$conecta->query($sql);
$linhas=mysqli_affected_rows($resultado_fornc);



if ($linhas > 0)
{
    echo '<script language="javascript">';
    echo "alert('Empresa salvo com sucesso!')";
    echo '</script>';	

    header("Location: cadastro_fornecedor_front.php");
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