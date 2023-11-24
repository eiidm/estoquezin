<?php
    include ("../utils/conexao.php");

    $sql=$conecta->query("DELETE FROM material WHERE id=".$_REQUEST["id"]);
    
    
    if ($sql==true)
    {
        echo '<script language="javascript">';
        echo "alert('Produto excluido com sucesso!')";
        echo '</script>';	
    
        header("Location: alterar_produtos_front.php");
    }   
    else
    {
         echo '<script language="javascript">';
        echo "alert('Erro na exclusão do produto!')";
         echo '</script>';	
    }
    
    mysqli_close($conecta);
?>
