<?php
include ("../utils/conexao.php"); 

$nomefornecedor=$_POST["nomefornecedor"];
$razaosocial=$_POST["razaosocial"];
$contato=$_POST["contato"];
$cnpj=$_POST["cnpj"];
$inscricao=$_POST["inscricao"];
$number=$_POST["number"];

$sql= $conecta->query("INSERT INTO nometabelafornecedor(nomefornecedor, razaosocial, contato, cnpj, inscricao, number)
VALUES ('{$nomefornecedor}',  '{$razaosocial}',  '{$contato}', '{$cnpj}', '{$inscricao}', '{$number}')");


//mascara de dados cnpj
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   $cnpj = $_POST["cnpj"];

   // Remove caracteres não numéricos do CNPJ
   $cnpj = preg_replace('/[^0-9]/', '', $cnpj);
}

//mascara de dados telefone
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   $phone = $_POST["phone"];

   // Remove caracteres não numéricos do telefone
   $phone = preg_replace('/[^0-9]/', '', $phone);
}

//mascara de dados inscricao estadual - sp
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inscricao = $_POST["inscricao"];

    // Remove caracteres não numéricos da Inscrição Estadual
    $inscricao = preg_replace('/[^0-9]/', '', $inscricao);
}


if ($sql==true)
{
    echo '<script>';
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