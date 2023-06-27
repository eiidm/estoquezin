<?php
    include "../utils/conexao.php"; 

  //dados enviados do script altera_prod_lista.php
   $id=$_POST["id"];
   $nomematerial=$_POST["nomematerial"];
   $nomegrupo=$_POST["nomegrupo"];
   $unidade=$_POST["unidade"];
   $local=$_POST["local"];
   $ncm=$_POST["ncm"];
   $obs=$_POST["obs"];
   $estmax=$_POST["estmax"];
   $estmin=$_POST["estmin"];
   $estideal=$_POST["estideal"];
   $valor=$_POST["valor"];

    $sql="UPDATE material 
             SET nomematerial = '$nomematerial',
                 nomegrupo = '$nomegrupo',
                 unidade = '$unidade', 
		     local = '$local', 
 		     ncm = '$ncm', 
 	           obs = '$obs', 
 	           estmax = $estmax, 
 	           estmin = $estmin, 
	           estideal = $estideal, 
                valor = $valor
           WHERE id = $id;";
    
    $resultado_alterado=mysqli_query($conecta,$sql);
    $qtde=mysqli_affected_rows($resultado_alterado);

    if ($qtde > 0)
        echo "<script type='text/javascript'>alert('Gravação OK !!!')</script>";
    else	
        echo "<script type='text/javascript'>alert('Erro na Gravação !!!')</script>";

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=form_altera_produtos_front.php'>";

    // Fechando conexão com o Banco de Dados
    mysqli_close($conecta);
?>