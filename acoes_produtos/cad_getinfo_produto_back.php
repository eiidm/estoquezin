<?php
    include "../utils/conexao.php"; 


    $sql="SELECT * FROM material WHERE id = $id;";

    $resultado_consulta=mysqli_query($conecta);
    $qtde=mysqli_num_rows($resultado_consulta);

    if ( $qtde == 0 )
    {
        echo '<script language="javascript">';
        echo "alert('Produto não encontrado!')";
        echo '</script>';	
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=pesquisar_produtos_front.php'>";
        exit;
    }

    $linha = mysqli_fetch_array($resultado_consulta);

    mysqli_close($conecta);
?>