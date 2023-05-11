<?php

$host = "mysql.efesonet.com"; //nome do servidor do MySQL
$usuario = "efesonet08"; // nome do usuário do MySQL
$password = "eq173b189"; // senha do MySQL
$port="3306"; 
$database="efesonet08"; // endereço do servidor MySQL


                        
$conecta = mysqli_connect($host, $usuario, $password, $port, $database);

if (!$conecta) {
        die("Erro ao conectar com o MySQL: " . mysqli_connect_error());
    }

?>    

