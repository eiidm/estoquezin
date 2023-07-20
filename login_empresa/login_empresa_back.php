<?php

    session_start();
    	// script foi chamado de index.php
    include "../utils/conexao.php";
	
	$cnpj = $_POST["cnpj"];
    $senha = MD5($_POST["senha"]);

	$sql = "select * from nometabelaempresa where cnpj = '$cnpj' and senha = '$senha' ";

    //mascara de dados cnpj
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $cnpj = $_POST["cnpj"];

        // Remove caracteres não numéricos do CNPJ
        $cnpj = preg_replace('/[^0-9]/', '', $cnpj);
    }

	$res = mysqli_query($conecta);
      if (mysqli_num_rows($res) > 0)
      {
        $linha = mysqli_fetch_array($res);

        $_SESSION["empresalogada"] = $linha;
        $_SESSION["adm"] = $linha['adm'];
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../index.php'>";
     }
     else
     {
        echo '<script language="javascript">';
        echo "alert('cnpj ou senha inválidos!')";
        echo '</script>';	

        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=login_empresa_front.php'>";
     }

?>