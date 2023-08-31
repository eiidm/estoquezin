<?php
include("../utils/conexao.php");

$nomematerial=$_POST["nomematerial"];
$nomegrupo=$_POST["nomegrupo"];
$unidade=$_POST["unidade"];
$local=$_POST["local"];
$ncm=$_POST["ncm"];
$estmin=$_POST["estmax"];
$estmax=$_POST["estmin"];
$estideal=$_POST["estideal"];
$valor=$_POST["valor"];
$img=$_POST["img"];
$obs=$_POST["obs"];


$sql=$conecta->query("INSERT INTO material
(nomematerial, nomegrupo, unidade, local, id_NCM, estoquemin, estoquemax, estoqueideal, valor_custo, fotomaterial, obs)
VALUES (
  '{$nomematerial}', '{$nomegrupo}', '{$unidade}', '{$local}', '{$ncm}', 
  '{$estmin}', '{$estmax}', '{$estideal}', '{$valor}', '{$img}', '{$obs}')");

if ($sql==true)
{
     echo '<script language="javascript">';
     echo "alert('Produto salvo com sucesso!')";
     echo '</script>';	

     header("Location: cadastro_produto_front.php");
}   
else
{
    echo '<script language="javascript">';
    echo "alert('Erro na gravação do produto!')";
    echo '</script>';	
 }

   mysqli_close($conecta);



?>
