<?php
include("../utils/conexao.php") ;

$nome=$_POST["nome"];
$cpf=$_POST["cpf"];


$sql=$conecta->query("INSERT INTO nometabelacolaborador(nome, cpf)
VALUES( '{$nome}', '{$cpf}') ");

if ($sql==true)
{
     echo '<script language="javascript">';
     echo "alert('Empresa salvo com sucesso!')";
     echo '</script>';	

     header("Location: login_colaborador_front.php");
}   
else
{
    echo '<script language="javascript">';
    echo "alert('Erro na gravação da empresa!')";
    echo '</script>';	
 }

mysqli_close($conecta);

?>
