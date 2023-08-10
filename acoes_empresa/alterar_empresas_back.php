<?php
    include ("../utils/conexao.php"); 

    $razaosocial=$_POST["razaosocial"];
    $email=$_POST["email"];
    $cnpj=$_POST["cnpj"];
    $endereco=$_POST["endereco"];
    $telefone=$_POST["telefone"];
    $senha=$_POST["senha"];

    $sql= $conecta->query("UPDATE nometabelaempresa SET 
        razaosocial='{$razaosocial}',
        email='{$email}',
        cnpj='{$cnpj}',
        endereco='{$endereco}',
        telefone='{$telefone}',
        senha='{$senha}'
        WHERE
            $id_empresa =".$_REQUEST["id_empresa"]);

    if ($sql==true)
    {
        echo '<script language="javascript">';
        echo "alert('Forncedor edidato com sucesso!')";
        echo '</script>';	

        header("Location: editar.php");
    }   
    else
    {
         echo '<script language="javascript">';
        echo "alert('Erro na gravação do forncedor!')";
         echo '</script>';	
}

// Fecha a conexão com o MySQL
mysqli_close($conecta);





?>