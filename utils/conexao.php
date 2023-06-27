<?php

$host = "mysql24-farm10.kinghost.net"; //nome do servidor do MySQL
$port=3306; //numero da porta no banco
$usuario = "efesonet08"; // nome do usuário do MySQL
$password = "eq173b189"; // senha do MySQL
$database="efesonet08"; // endereço do servidor MySQL

$conecta = mysqli_connect($host, $usuario, $password, $database, $port);

if (!$conecta) {
        die("Erro ao conectar com o MySQL: " . mysqli_connect_error());
    }

?>    

