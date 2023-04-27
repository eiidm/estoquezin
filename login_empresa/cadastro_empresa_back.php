<?php
include "../utils/conexao.php"; 

// Recuperação de dados
   $razaosocial=$_POST['razaosocial'];
   $email=$_POST['email'];
   $cnpj=$_POST['cnpj'];
   $endereco=$_POST['endereco'];
   $telefone=$_POST['telefone'];
   $senha=$_POST['senha'];
  
// Inserção
   $sql="INSERT INTO nometabelaempresa
         (id_empresa, razaosocial, email, cnpj, endereco, telefone, senha)
         VALUES (
           DEFAULT,
           '$razaosocial',  
           '$email', 
           $cnpj,
           '$endereco',
           $telefone,
           $senha);";

// Execução
   $resultado=mysqli_query($conecta,$sql);
   $linhas=mysqli_affected_rows($resultado);

if ($linhas > 0)
   {
       echo '<script language="javascript">';
       echo "alert('Empresa salvo com sucesso!')";
       echo '</script>';	

       header("Location: cadastro_empresa_front.php");
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