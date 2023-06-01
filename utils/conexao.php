<?php

$host = "mysql.efesonet.com"; //nome do servidor do MySQL
$port=3306; //numero da porta no banco
$usuario = "efesonet08"; // nome do usuário do MySQL
$password = "eq173b189"; // senha do MySQL
$database="efesonet08"; // endereço do servidor MySQL

/*

    $stringdeconexao = "host=mysql.efesonet.com
                        port=3306
                        dbname=efesonet08
                        user=efesonet08
                        password=eq173b189";
*/

                        
$conecta = mysqli_connect($host, $usuario, $password, $database, $port);

/*$conecta = mysqli_connect($stringconexao);*/

if (!$conecta) {
        die("Erro ao conectar com o MySQL: " . mysqli_connect_error());
    }

?>    

