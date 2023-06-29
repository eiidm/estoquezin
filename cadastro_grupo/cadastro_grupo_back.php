<?php
include ("../utils/conexao.php");

$id_material=$_POST["id_material"];
$nomegrupo=$_POST["nomegrupo"];

$sql="INSERT INTO nometabelagrupo (id_material, nomegrupo) VALUES ('{$id_material}', '{$nomegrupo}')";

$resultado_grupo=$conecta->query($sql);
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