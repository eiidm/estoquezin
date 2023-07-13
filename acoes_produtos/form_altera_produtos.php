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

                <li><a class='menu_topico'>Empresas</a></li>
                    <li><a class='menu_item' href='../login_empresa/cadastro_empresa_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_empresa/alterar_empresas_front.php'>Alteração</a></li>
                    <li><a class='menu_item' href='../acoes_empresa/excluir_empresas_front.php'>Exclusão</a></li>

                <li><a class='menu_topico'>Grupos</a></li>
                    <li><a class='menu_item' href="../cadastro_grupo/cadastro_grupo_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_grupo/alterar_grupos_front.php'>Alteração</a></li>
                    <li><a class='menu_item' href='../acoes_grupo/excluir_grupos_front.php'>Exclusão</a></li>

                <li><a class='menu_topico'>Produtos</a></li>
                    <li><a class='menu_item' href='../cadastro_produtos/cadastro_produtos_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='./alterar_produtos_front.php'>Alteração</a></li>
                    <li><a class='menu_item' href='../acoes_produtos/excluir_produtos_front.php'>Exclusão</a></li>
                    <li><a class='menu_item' href='../consulta_produtos/consulta_produtos_front.php'>Consulta</a></li>
                    <li><a class='menu_item' href=''>Pedido de compra</a></li>

                <li><a class='menu_topico'>Fornecedores</a></li>
                    <li><a class='menu_item' href='../cadastro_fornecedor/cadastro_fornecedor_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_fornecedor/alterar_fornecedores_front.php'>Alteração</a></li>
                    <li><a class='menu_item' href='../acoes_fornecedor/excluir_fornecedores_front.php'>Exclusão</a></li>
            </ul>
        </div>

    <div class='home'>
        <img scr=''>
    </div> <!-- ------ MENU ------ -->

    <?php
       $id_NCM = $_GET["id_NCM"];
       include "cad_getinfo_produto_back.php"; 
    ?>   

    <div class="container">
        <h2 class="texto texto-um">Alteração de Produtos</h2>
        <div class="tela Um">
            <form class="form" action="./alterar_produtos_back.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="colunaUm">       
                        <br>Nome do material
                        <label class="label-input">
                            <input type="text" name="nomematerial" value="<?php echo $linha['nomematerial']; ?>" >
                        </label>
        
                        <br>Nome do grupo
                        <label class="label-input">
                            <input type="text" name="nomegrupo" value="<?php echo $linha['nomegrupo']; ?>" >
                        </label>

                        <br>Unidade
                        <label class="label-input">
                            <input type="number" name="unidade" value="<?php echo $linha['unidade']; ?>" >
                        </label>
        
                        <br>Local
                        <label class="label-input">
                            <input type="text" name="local" value="<?php echo $linha['local']; ?>" >
                        </label>

                        <br>NCM (ID)
                        <label class="label-input">
                            <input type="number" name="ncm" value="<?php echo $linha['ncm']; ?>" >
                        </label>

                        <br>Observação
                        <label class="label-input">
                            <input type="text" name="obs" value="<?php echo $linha['obs']; ?>" >
                        </label>
                    </div><!--coluna um-->

                    <div class="colunaDois">
                        <br>Estoque máximo
                        <label class="label-input">
                            <input type="number" name="estmax" value="<?php echo $linha['estmax']; ?>" >
                        </label>
                        
                        <br>Estoque mínimo
                        <label class="label-input">
                            <input type="number" name="estmin" value="<?php echo $linha['estmin']; ?>" >
                        </label>
                        
                        <br>Estoque ideal
                        <label class="label-input">
                            <input type="number" name="estideal" value="<?php echo $linha['estideal']; ?>" >
                        </label>

                        <br>Valor
                        <label class="label-input">
                            <input type="text" name="valor" value="<?php echo $linha['valor']; ?>" >
                        </label>

                        <br>Excluido(s/n)
                        <label class="label-input">
                            <input type="text" name="excluido" value="<?php echo $linha['excluido']; ?>" >
                        </label>

                        <br>Imagem do produto
                        <label class="label-input">
                            <input type="file" name="img" value="<?php echo $linha['img']; ?>" >
                        </label>
                    </div><!--coluna dois-->
                </div><!--row-->

                <div class="lado">
                    <button class="btn btn-dois">Alterar</button>
                </div>
            </form>
        </div><!--tela um-->
    </div><!--container-->
</body>
</html>