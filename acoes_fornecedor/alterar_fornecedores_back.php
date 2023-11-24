<?php
    include ("../utils/conexao.php"); 

    $id_fornecedor=$_POST["id_fornecedor"];
    $nomefornecedor=$_POST["nomefornecedor"];
    $razaosocial=$_POST["razaosocial"];
    $contato=$_POST["contato"];
    $cnpj=$_POST["cnpj"];
    $inscricao=$_POST["inscricao"];
    $number=$_POST["number"];

    $sql= $conecta->query("UPDATE nometabelafornecedor SET 
        nomefornecedor='{$nomefornecedor}',
        razaosocial='{$razaosocial}',
        contato='{$contato}',
        cnpj='{$cnpj}',
        inscricao='{$inscricao}',
        number='{$number}'
        WHERE
            id_fornecedor ='{$id_fornecedor}'");

    if ($sql==true)
    {
        echo '<script language="javascript">';
        echo "alert('Fornecedor editado com sucesso!')";
        echo '</script>';	

        header("Location: alterar_fornecedores_front.php");
    }   
    else
    {
         echo '<script language="javascript">';
        echo "alert('Erro na gravação do fornecedor!')";
         echo '</script>';	
}

// Fecha a conexão com o MySQL
mysqli_close($conecta);





?>