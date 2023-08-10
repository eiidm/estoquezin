<?php
    include ("../utils/conexao.php"); 

    $nomegrupo=$_POST["nomegrupo"];
   
    $sql= $conecta->query("UPDATE nometabelagrupo SET 
        nomeforncedor='{$nomefornecedor}' WHERE $id_grupo =".$_REQUEST["id_grupo"]);

    if ($sql==true)
    {
        echo '<script language="javascript">';
        echo "alert('Forncedor edidato com sucesso!')";
        echo '</script>';	

        header("Location: editar.php");
    }   
    else
    {
         echo '<script language="javascript">';
        echo "alert('Erro na gravação do forncedor!')";
         echo '</script>';	
}

// Fecha a conexão com o MySQL
mysqli_close($conecta);





?>