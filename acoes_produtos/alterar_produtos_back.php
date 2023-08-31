<?php
    include "../utils/conexao.php"; 

  //dados enviados do script altera_prod_lista.php
   $id=$_POST["id"];
   $nomematerial=$_POST["nomematerial"];
   $nomegrupo=$_POST["nomegrupo"];
   $unidade=$_POST["unidade"];
   $local=$_POST["local"];
   $ncm=$_POST["ncm"];
   $estmin=$_POST["estmin"];
   $estmax=$_POST["estmax"];
   $estideal=$_POST["estideal"];
   $valor=$_POST["valor"];
   $img=$_POST["img"];
   $obs=$_POST["obs"];

   $sql= $conecta->query("UPDATE material SET 
   nomematerial='{$nomefornecedor}', 
   nomegrupo='{$nomefornecedor}', 
   unidade='{$nomefornecedor}', 
   local='{$nomefornecedor}', 
   id_NCM='{$nomefornecedor}', 
   estoquemin='{$nomefornecedor}', 
   estoquemax='{$nomefornecedor}', 
   valor_custo='{$nomefornecedor}', 
   fotomaterial='{$nomefornecedor}', 
   obs='{$nomefornecedor}'
    WHERE $id_grupo =".$_REQUEST["id"]);

if ($sql==true)
{
    echo '<script language="javascript">';
    echo "alert('Forncedor edidato com sucesso!')";
    echo '</script>';	

    header("Location: alterar_produtos_front.php");
}   
else
{
     echo '<script language="javascript">';
    echo "alert('Erro na gravação do forncedor!')";
     echo '</script>';
}

    // Fechando conexão com o Banco de Dados
    mysqli_close($conecta);
?>