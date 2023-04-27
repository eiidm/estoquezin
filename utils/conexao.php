<?php
 $stringdeconexao = "host= mysql.efesonet.com
                        port=3306
                        dbname=projetoscti4
                        user=efesonet08
                        password=eq173b189";

                        //lmkm
$conecta = mysqli_connect($stringdeconexao);

if (!$conecta) {
        echo '<script language="javascript">';
        echo "alert('Não foi possível estabelecer conexão com o banco de dados!')";
        echo '</script>';	
        
        exit;
    }
?>    
