<?php
include "../utils/conexao.php";

$nomegrupo=$_POST['nomegrupo'];

$sql="INSERT INTO nometabelagrupo
         (id_grupo, id_material, nomegrupo)
         VALUES (
           DEFAULT,
           '$nomegrupo');";

$resultado_grupo=mysqli_query($conecta);
$linhas=mysqli_affected_rows($resultado_grupo);

if ($linhas > 0)
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