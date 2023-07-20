<?php
include ("../utils/conexao.php"); 

// Recuperação de dados
   $razaosocial=$_POST["razaosocial"];
   $email=$_POST["email"];
   $cnpj=$_POST["cnpj"];
   $endereco=$_POST["endereco"];
   $telefone=$_POST["telefone"];
   $senha=$_POST["senha"];
  
// Inserção
   /*$sql="INSERT INTO nometabelaempresa
         (razaosocial, email, cnpj, endereco, telefone, senha)
         VALUES (
           '{$razaosocial}',  {'$email'}, {'$cnpj'}, {'$endereco'}, {'$telefone'}, {'$senha'})";

// Execução
$resultado_empresa=$conecta->query($sql);
*/

$sql= $conecta->query("INSERT INTO nometabelaempresa(razaosocial, email, cnpj, endereco, telefone, senha) VALUES (
    '{$razaosocial}',  '{$email}', '{$cnpj}', '{$endereco}', '{$telefone}', '{$senha}')");

//mascara de dados cnpj
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   $cnpj = $_POST["cnpj"];

   // Remove caracteres não numéricos do CNPJ
   $cnpj = preg_replace('/[^0-9]/', '', $cnpj);
}

//mascara de dados telefone
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   $telefone = $_POST["telefone"];

   // Remove caracteres não numéricos do telefone
   $telefone = preg_replace('/[^0-9]/', '', $telefone);
}

if($sql==true)
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