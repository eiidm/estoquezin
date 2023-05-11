<?php

$host = "mysql.efesonet.com";
$port="3306"; 
$dbname="efesonet08"; // endereço do servidor MySQL
$usuario = "efesonet08"; // nome do usuário do MySQL
$password = "eq173b189"; // senha do MySQL
                        
$conecta = mysqli_connect($host, $port, $dbname, $usuario, $password);

if (!$conecta) {
        die("Erro ao conectar com o MySQL: " . mysqli_connect_error());
    }

?>    

