<?php
    include ("../utils/conexao.php"); 

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $id_grupo=$_POST["id_grupo"];
        $nomegrupo=$_POST["nomegrupo"];
   
    $sql= $conecta->query("UPDATE nometabelagrupo SET 
        nomegrupo='{$nomegrupo}' WHERE id_grupo='{$id_grupo}'");

    if ($sql==true)
    {
        echo '<script language="javascript">';
        echo "alert('Grupo de materiais editado com sucesso!')";
        echo '</script>';	

        header("Location: alterar_grupos_front.php");
    }   
    else
    {
         echo '<script language="javascript">';
        echo "alert('Erro na gravação do grupo!')";
         echo '</script>';	
    }


    }

    

// Fecha a conexão com o MySQL
mysqli_close($conecta);

/*.$_REQUEST["id_grupo"]*/



?>