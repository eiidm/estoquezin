<?php
    include ("../utils/conexao.php"); 

    $nomegrupo=$_POST["nomegrupo"];
   
    $sql= $conecta->query("UPDATE nometabelagrupo SET 
        nomegrupo='{$nomegrupo}' WHERE $id_grupo =".$_REQUEST["id_grupo"]);

    if ($sql==true)
    {
        echo '<script language="javascript">';
        echo "alert('Forncedor edidato com sucesso!')";
        echo '</script>';	

        header("Location: alterar_grupos_front.php");
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