<?php
include "../utils/conexao.php"; 

$nomematerial=$_POST['nomematerial'];
$nomegrupo=$_POST['nomegrupo'];
$unidade=$_POST['unidade'];
$local=$_POST['local'];
$ncm=$_POST['ncm'];
$obs=$_POST['obs'];
$estmax=$_POST['estmax'];
$estmin=$_POST['estmin'];
$estideal=$_POST['estideal'];
$valor=$_POST['valor'];

$sql="INSERT INTO material
         (id, nomematerial, nomegrupo, unidade, local, id_NCM, estoquemin, estoquemax, estoqueideal, valor_custo)
         VALUES (
           DEFAULT,
           '$nomematerial',  
           '$nomegrupo', 
           '$unidade',
           '$local',
           '$ncm',
           $estmin,
           $estmax,
           $estideal,
           $valor);";

$resultado_produto=mysqli_query($conecta,$sql);
$linhas=mysqli_affected_rows($resultado_produto);

if ($linhas > 0)
{
     echo '<script language="javascript">';
     echo "alert('Empresa salvo com sucesso!')";
     echo '</script>';	

     header("Location: cadastro_produto_front.php");
}   
else
{
    echo '<script language="javascript">';
    echo "alert('Erro na gravação da empresa!')";
    echo '</script>';	
 }

   mysqli_close($conecta);



?>
