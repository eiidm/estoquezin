
<?php
    session_start();
?>

<div style="border: 1px">
    <a href="../index.php" target="_parent">Home</a>&nbsp;| &nbsp;
    <a href="../consulta_produtos/consulta_produtos_front.php" target="_parent">Produtos Cadastrados</a>&nbsp;|&nbsp;
    
    <?php
        // Usuário é um ADM???
        if (isset($_SESSION['isadm']) && $_SESSION['isadm'] == 't')
            echo "<a href='../consulta_produtos/consulta_produtos_front.php' target='_parent'>Consulta Produtos</a>&nbsp;|&nbsp;";
    ?>

    <a href="../cadastro_produtos/cadastro_produtos_front.php" target="_parent">Cadastro de Produtos</a>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <?php

        // Usuário está logado???
        if (isset($_SESSION['empresalogada']))
        {
            echo "<a href='../login_empresa/logoff_empresa.php' target='_parent'>";
            echo $_SESSION['empresalogada']['empresa'];
            echo " - ";
            echo $_SESSION['empresalogada']['id_empresa'];
            echo "</a>";
        }
        else
        {
            echo "<a href='../login_empresa/login_empresa_front.php' width='30px' target='_parent'>Login</a>";
        }

    ?>
</div>