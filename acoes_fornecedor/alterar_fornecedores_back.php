<?php
    include ("../utils/conexao.php"); 

    $nomefornecedor=$_POST["nomefornecedor"];
    $razaosocial=$_POST["razaosocial"];
    $contato=$_POST["contato"];
    $cnpj=$_POST["cnpj"];
    $inscricao=$_POST["inscricao"];
    $number=$_POST["number"];

    $sql= $conecta->query("UPDATE nometabelaforncedor SET 
        nomeforncedor='{$nomefornecedor}',
        razaosocial='{$razaosocial}',
        contato='{$contato}',
        cnpj='{$cnpj}',
        inscricao='{$inscricao}',
        number='{$number}'
        WHERE
            $id_fornecedor =".$_REQUEST["id_fornecedor"]);

    if ($sql==true)
    {
        echo '<script language="javascript">';
        echo "alert('Forncedor salvo com sucesso!')";
        echo '</script>';	

        header("Location: form_altera_fornecedores_front.php");
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