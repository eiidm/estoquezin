<?php
include "../utils/conexao.php";

$nome=$_POST['nome'];
$cpf=$_POST['cpf'];

$sql="INSERT INTO nometabelacolaborador(id_colaborador, nome, cpf)
        VALUES(DEFAULT, '$nome', '$cpf'); ";

$resultado_colab=mysqli_query($conecta, $sql);
$linhas=mysqli_affected_rows(mysqli.$resultado_colab);

if ($linhas > 0)
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
