<?php
    include ("../utils/conexao.php"); 

    $id_empresa= $_POST["id_empresa"];
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
            id_empresa = '{$id_empresa}'");

    if ($sql==true)
    {
        echo '<script language="javascript">';
        echo "alert('Empresa editada com sucesso!')";
        echo '</script>';	

        header("Location: alterar_empresas_front.php");
    }   
    else
    {
         echo '<script language="javascript">';
        echo "alert('Erro na gravação da empresa!')";
         echo '</script>';	
}

// Fecha a conexão com o MySQL
mysqli_close($conecta);





?>