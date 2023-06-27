<?php
    include "../utils/conexao.php"; 


    $sql="SELECT * FROM material WHERE id = $id;";

    $resultado_consulta=mysqli_query($conecta,$sql);
    $qtde=mysqli_num_rows($resultado);

    if ( $qtde == 0 )
    {
        echo '<script language="javascript">';
        echo "alert('Produto não encontrado!')";
        echo '</script>';	
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=pesquisar_produtos_front.php'>";
        exit;
    }

    $linha = mysqli_fetch_array($resultado);

    mysqli_close($conecta);
?>