<?php

define('host', 'mysql24-farm10.kinghost.net');
define('usuario', 'efesonet08');
define('password', 'eq173b189');
define('database', 'efesonet08');
define('port', 3306);

$conecta = new MySQLi(host, usuario, password, database, port );

if (!$conecta) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>    

