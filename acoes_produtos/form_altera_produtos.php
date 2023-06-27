<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./form_altera.css">
    <link rel="stylesheet" href="./menu.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <title>Alterando Produtos</title>
</head>

<body>
    <div class='cabecalho'>
        <input id='menu_to' type='checkbox' />
        <label class='menu_btn' for='menu_to'>
            <span></span>
        </label>
            <ul class='menu_box'>
                <li><a class='menu_item' href=''>Home</a></li>
                <li><a class='menu_item' href="../login_colaborador/login_colaborador_front.php">Colaborador</a></li>

                <li><a class='menu_topico'>Grupos</a></li>
                    <li><a class='menu_item' href="../cadastro_grupo/cadastro_grupo_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href=''>Alteração</a></li>
                    <li><a class='menu_item' href=''>Exclusão</a></li>

                <li><a class='menu_topico'>Produtos</a></li>
                    <li><a class='menu_item' href='../cadastro_produtos/cadastro_produtos_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='./alterar_produtos_front.php'>Alteração</a></li>
                    <li><a class='menu_item' href='../acoes_produtos/excluir_produtos_front.php'>Exclusão</a></li>
                    <li><a class='menu_item' href='../consulta_produtos/consulta_produtos_front.php'>Consulta</a></li>
                    <li><a class='menu_item' href=''>Pedido de compra</a></li>

                <li><a class='menu_topico'>Fornecedores</a></li>
                    <li><a class='menu_item' href='../cadastro_fornecedor/cadastro_fornecedor_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href=''>Alteração</a></li>
                    <li><a class='menu_item' href=''>Exclusão</a></li>
            </ul>
        </div>

    <div class='home'>
        <img scr=''>
    </div> <!-- ------ MENU ------ -->

    <?php
       $id = $_GET["id"];
       include "alterar_produtos_back.php"; 
    ?>   

    <div class="container">
        <h2 class="texto texto-um">Alteração de Produtos</h2>
        <div class="tela Um">
            <form class="form" action="./alterar_produtos_back.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="colunaUm">
                        Código do produto
                        <label class="label-input">
                            <input type="text" name="id" value="<?php echo $linha['id']; ?>" readonly>
                        </label>
       
                        <br><br>Nome do material
                        <label class="label-input">
                            <input type="text" name="nomematerial" value="<?php echo $linha['nomematerial']; ?>" >
                        </label>
        
                        <br><br>Nome do grupo
                        <label class="label-input">
                            <input type="text" name="nomegrupo" value="<?php echo $linha['nomegrupo']; ?>" >
                        </label>

                        <br><br>Unidade
                        <label class="label-input">
                            <input type="number" name="unidade" value="<?php echo $linha['unidade']; ?>" >
                        </label>
        
                        <br><br>Local
                        <label class="label-input">
                            <input type="text" name="local" value="<?php echo $linha['local']; ?>" >
                        </label>

                        <br><br>NCM (ID)
                        <label class="label-input">
                            <input type="number" name="ncm" value="<?php echo $linha['ncm']; ?>" >
                        </label>

                        <br><br>Observação
                        <label class="label-input">
                            <input type="text" name="obs" value="<?php echo $linha['obs']; ?>" >
                        </label>
                    </div><!--coluna um-->

                    <div class="colunaDois">
                        <br><br>Estoque máximo
                        <label class="label-input">
                            <input type="number" name="estmax" value="<?php echo $linha['estmax']; ?>" >
                        </label>
                        
                        <br><br>Estoque mínimo
                        <label class="label-input">
                            <input type="number" name="estmin" value="<?php echo $linha['estmin']; ?>" >
                        </label>
                        
                        <br><br>Estoque ideal
                        <label class="label-input">
                            <input type="number" name="estideal" value="<?php echo $linha['estideal']; ?>" >
                        </label>

                        <br><br>Valor
                        <label class="label-input">
                            <input type="text" name="valor" value="<?php echo $linha['valor']; ?>" >
                        </label>

                        <br><br>Excluido(s/n)
                        <label class="label-input">
                            <input type="text" name="excluido" value="<?php echo $linha['excluido']; ?>" >
                        </label>

                        <br><br>Imagem do produto
                        <label class="label-input">
                            <input type="file" name="img" value="<?php echo $linha['img']; ?>" >
                        </label>
                    </div><!--coluna dois-->
                </div><!--row-->

                <br><br>
                <input type="submit" value="Gravar">
                <input type="reset" value="Voltar" onclick="history.back()">
            </form>
        </div><!--tela um-->
    </div><!--container-->
</body>
</html>