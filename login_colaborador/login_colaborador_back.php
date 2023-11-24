<?php
include("../utils/conexao.php") ;

$nome=$_POST["nome"];
$cpf=$_POST["cpf"];


$sql=$conecta->query("INSERT INTO nometabelacolaborador(nome, cpf)
VALUES( '{$nome}', '{$cpf}') ");

//mascara de dados cpf
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
     $cpf = $_POST["cpf"];

     // Remove caracteres não numéricos do CPF
     $cpf = preg_replace('/[^0-9]/', '', $cpf);
}

if ($sql==true)
{
     echo '<script language="javascript">';
     echo "alert('Colaborador salvo com sucesso!')";
     echo '</script>';	

     header("Location: login_colaborador_front.php");
}   
else
{
    echo '<script language="javascript">';
    echo "alert('Erro na gravação do colaborador!')";
    echo '</script>';	
 }

mysqli_close($conecta);

?>
