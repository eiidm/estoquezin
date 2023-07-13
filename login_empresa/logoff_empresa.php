<?php
    session_start();

    if (isset($_SESSION["empresalogada"]))
    {
        session_unset();
        session_destroy();
    }

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../index.php'>";
    exit;
?>