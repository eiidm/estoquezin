<?php

include "../utils/conexao.php"; 

    /* a variável $cod_produto deve já ter sido atribuída na página pai, antes do include
       para esse arquivo */
    $sql="SELECT * FROM material WHERE id = $id;";

    $resultado=mysqli_query($conecta,$sql);
    $qtde=mysqli_num_rows($resultado);

    if ( $qtde == 0 )
    {
        echo '<script language="javascript">';
        echo "alert('Produto não encontrado!')";
        echo '</script>';	
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=detalhes_produto_front.php'>";
        exit;
    }

    $linha = mysqli_fetch_array($resultado);

    // Fecha a conexão com o PostgreSQL
    mysqli_close($conecta);



?>