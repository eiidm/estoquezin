<?php
    session_start();
    unset( $_SESSION["razaosocial"]);
    unset(  $_SESSION["email"]);
    unset( $_SESSION["cnpj"]);
    unset( $_SESSION["endereco"]);
    unset(  $_SESSION["telefone"]);
    unset(  $_SESSION["senha"]);
    session_destroy();
    header("Location: login_empresa_front.php");
    exit;
?>