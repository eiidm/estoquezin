<?php

    session_start();
    	// script foi chamado de index.php
    include "../utils/conexao.php";
	
	$cnpj = $_POST["cnpj"];
    $senha = MD5($_POST["senha"]);

	$sql = "select * from nometabelaempresa where cnpj = '$cnpj' and senha = '$senha' ";

	$res = mysqli_query($conecta, $sql);
      if (mysqli_num_rows($res) > 0)
      {
        $linha = mysqli_fetch_array($res);

        $_SESSION["cnpjlogado"] = $linha;
        $_SESSION["adm"] = $linha['adm'];
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../menu.php'>";
     }
     else
     {
        echo '<script language="javascript">';
        echo "alert('cnpj ou senha inválidos!')";
        echo '</script>';	

        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=login_empresa_front.php'>";
     }

?>