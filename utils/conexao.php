<?php

$conecta = mysqli_connect("mysql24-farm10.kinghost.net", "efesonet08", 
"eq173b189", "efesonet08");

if (!$conecta) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
/*
$host = "mysql24-farm10.kinghost.net"; //nome do servidor do MySQL
$port=3306; //numero da porta no banco
$usuario = "efesonet08"; // nome do usuário do MySQL
$password = "eq173b189"; // senha do MySQL
$database="efesonet08"; // endereço do servidor MySQL


                        
$conecta = mysqli_connect($host, $usuario, $password, $database, $port);



if (!$conecta) {
        die("Erro ao conectar com o MySQL: " . mysqli_connect_error());
    }
*/
?>    

