
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./form_altera.css">
    <link rel="stylesheet" href="./menu.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <title>Alterando Empresa</title>
</head>

<body>
    <div class='cabecalho'>
        <input id='menu_to' type='checkbox' />
        <label class='menu_btn' for='menu_to'>
            <span></span>
        </label>
            <ul class='menu_box'>
                <li><a class='menu_item' href='../home/home_front.php'>Home</a></li>
                <li><a class='menu_item' href="../login_colaborador/login_colaborador_front.php">Colaborador</a></li>

                <li><a class='menu_topico'>Empresas</a></li>
                    <li><a class='menu_item' href='../login_empresa/cadastro_empresa_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='./alterar_empresas_front.php'>Alteração/Exclusão</a></li>

                <li><a class='menu_topico'>Grupos</a></li>
                    <li><a class='menu_item' href="../cadastro_grupo/cadastro_grupo_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_grupo/alterar_grupos_front.php'>Alteração/Exclusão</a></li>

                <li><a class='menu_topico'>Produtos</a></li>
                    <li><a class='menu_item' href='../cadastro_produtos/cadastro_produtos_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_produtos/alterar_produtos_front.php'>Alteração/Exclusão</a></li>

                <li><a class='menu_topico'>Item</a></li>
                    <li><a class='menu_item' href='../item/cadastro_item_front.php'>Saída</a></li>
                    <li><a class='menu_item' href='../item/entrada_front.php'>Entrada</a></li>
                    <li><a class='menu_item' href='../item/saida_front.php'>Relatório de saída</a></li>
                    <li><a class='menu_item' href='../item/relatorio_front.php'>Relatório de entrada</a></li>

                <li><a class='menu_topico'>Fornecedores</a></li>
                    <li><a class='menu_item' href='../cadastro_fornecedor/cadastro_fornecedor_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_fornecedor/alterar_fornecedores_front.php'>Alteração/Exclusão</a></li>
            </ul>
        </div>

    <div class='home'>
        <img scr=''>
    </div> <!-- ------ MENU ------ -->

    
    <?php
        include ("../utils/conexao.php"); 
       $sql= $conecta->query("SELECT * FROM material WHERE id=".$_REQUEST["id"]);
       $row = $sql->fetch_object();
    ?> 
 

    <div class="container">
        <h2 class="texto texto-um">Alteração de Empresa</h2>
        <div class="tela Um">
            <form class="form" action="./alterar_empresas_back.php" method="post">
                <div class="row">
                    <div class="colunaUm">       
                    <input type="text" name="id" value="<?php print $row->id; ?>" >   
                        <br>Nome do material
                        <label class="label-input">
                            <input type="text" name="nomematerial" value="<?php print $row->nomematerial; ?>" >
                        </label>
        
                        <br>Nome do grupo
                        <label class="label-input">
                            <input type="text" name="nomegrupo" value="<?php print $row->nomegrupo; ?>" >
                        </label>

                        <br>Unidades
                        <label class="label-input">
                            <input type="text" name="unidade" value="<?php print $row->unidade; ?>" >
                        </label>

                        <br>Local
                        <label class="label-input">
                            <input type="text" name="local" value="<?php print $row->local; ?>" >
                        </label>
                    </div><!--coluna um-->
        
                    <div class="colunaDois">

                    <br>ID NCM
                        <label class="label-input">
                            <input type="text" name="ncm" value="<?php print $row->id_NCM; ?>" >
                        </label>

                        <br>Estoque Mínimo
                        <label class="label-input">
                            <input type="number" name="estmin" value="<?php print $row->estoquemin; ?>" >
                        </label>

                        
                        <br>Estoque Máximo
                        <label class="label-input">
                            <input type="number" name="estmax" value="<?php print $row->estoquemax; ?>" >
                        </label>

                        <br>Estoque Ideal
                        <label class="label-input">
                            <input type="number" name="estideal" value="<?php print $row->estoqueideal; ?>" >
                        </label>

                        <br>Custo
                        <label class="label-input">
                            <input type="tel" name="valor" value="<?php print $row->valor_custo; ?>" >
                        </label>

                        <br>Foto
                        <label class="label-input">
                            <input type="file" name="img" value="<?php print $row->fotomaterial; ?>" >
                        </label>

                        <br>Observação
                        <label class="label-input">
                            <input type="number" name="obs" value="<?php print $row->obs; ?>" >
                        </label>



                        
                    </div><!--coluna dois-->
                </div><!--row-->

               
                
                <div class="lado">
                    <button class="btn btn-dois">Alterar</button>
                </div>

                <?php
                    mysqli_close($conecta);
                ?>
            </form>

            
        </div><!--tela um-->
    </div><!--container-->
</body>
</html>