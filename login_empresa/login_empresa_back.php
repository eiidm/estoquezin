<?php

    session_start();
    	// script foi chamado de index.php
    if(empty($_POST) or (empty($_POST["cnpj"]) or (empty($_POST["senha"]))))
        print "<script>location.href='login_empresa_front.php'</script>";
    include ("../utils/conexao.php");
	

	$cnpj = $_POST["cnpj"];
    $senha = $_POST["senha"];

	$sql = $conecta->query("SELECT * from nometabelaempresa where cnpj = '{$cnpj}' and senha = '{$senha}' ") or die($conecta->error);

    $row=$sql->fetch_object();

    $qtd = $sql->num_rows;

    if($qtd > 0){
        $_SESSION["razaosocial"]= $row->razaosocial;
        $_SESSION["email"]= $row->email;
        $_SESSION["cnpj"]= $cnpj;
        $_SESSION["endereco"]= $row->enereco;
        $_SESSION["telefone"]= $row->telefone;
        $_SESSION["senha"]= $senha;
        print  "<script>location.href='../cadastro_produtos/cadastro_produtos_front.php'</script>";
    }
    else{
        print "<script>alert('Empresa não encontrada')</script>";
    }

?>