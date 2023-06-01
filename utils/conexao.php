<?php

$host = "mysql.efesonet.com"; //nome do servidor do MySQL
$usuario = "efesonet08"; // nome do usuário do MySQL
$password = "eq173b189"; // senha do MySQL
$port=3306; 
$database="efesonet08"; // endereço do servidor MySQL

/*

    $stringdeconexao = "host=mysql.efesonet.com
                        port=3306
                        dbname=efesonet08
                        user=efesonet08
                        password=eq173b189";
*/

                        
$conecta = mysqli_connect($host, $usuario, $password, $port, $database);

/*$conecta = mysqli_connect($stringconexao);*/

if (!$conecta) {
        die("Erro ao conectar com o MySQL: " . mysqli_connect_error());
    }

?>    

