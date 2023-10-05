<?php
    include ("../utils/conexao.php");

    $sql=$conecta->query("DELETE FROM material WHERE id=".$_REQUEST["id"]);
    
    
    if ($sql==true)
    {
        echo '<script language="javascript">';
        echo "alert('Forncedor excluido com sucesso!')";
        echo '</script>';	
    
        header("Location: excluir_produtos_front.php");
    }   
    else
    {
         echo '<script language="javascript">';
        echo "alert('Erro na exclusão do forncedor!')";
         echo '</script>';	
    }
    
    mysqli_close($conecta);
?>
