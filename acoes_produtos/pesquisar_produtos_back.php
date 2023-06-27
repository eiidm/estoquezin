<?php
   
    include "../utils/conexao.php"; 

    
    $sql="SELECT * FROM material WHERE excluido='n' ORDER BY id;";
    
   
    $resultado= mysqli_query($conecta, $sql);

    $qtde=mysqli_num_rows($resultado);

    $resultado_lista = null;

    if ($qtde > 0)
    {
        // coloca os dados em uma variável
        $resultado_lista=mysqli_fetch_all($resultado);
    }
 
    mysqli_close($conecta);
?>