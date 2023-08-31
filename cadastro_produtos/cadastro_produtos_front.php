<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../cadastro_produtos/cadastro_produtos.css">
    <link rel="stylesheet" href="./menu.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <title>Cadastro de Produtos</title>
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
                    <li><a class='menu_item' href='../acoes_empresa/alterar_empresas_front.php'>Alteração</a></li>
                    <li><a class='menu_item' href='../acoes_empresa/excluir_empresas_front.php'>Exclusão</a></li>

                <li><a class='menu_topico'>Grupos</a></li>
                    <li><a class='menu_item' href="../cadastro_grupo/cadastro_grupo_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_grupo/alterar_grupos_front.php'>Alteração</a></li>
                    <li><a class='menu_item' href='../acoes_grupo/excluir_grupos_front.php'>Exclusão</a></li>

                <li><a class='menu_topico'>Produtos</a></li>
                    <li><a class='menu_item' href='cadastro_produtos_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_produtos/alterar_produtos_front.php'>Alteração</a></li>
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

    <div class="container">
        <h2 class="texto texto-um">Cadastro de Produtos</h2>
        <div class="tela Um">
            <form class="form" action="./cadastro_produto_back.php" method="post" enctype="multipart/form-data"> 
                <div class="row">    
                    <div class="colunaUm">      
                        <label class="label-input" for="">
                            <input type="text" name="nomematerial" placeholder="   Nome do Produto" required>
                        </label>

                        <label class="label-input" for="">
                            <input type="text" name="nomegrupo" placeholder="   Nome do grupo" required> 
                        </label>

                        <label class="label-input" for="">
                            <input type="number" name="unidade" placeholder="   Unidade" required> 
                        </label>

                        <label class="label-input" for="">
                            <input type="text" name="local" placeholder="   Local" required>
                        </label>

                        <label class="label-input" for="">
                            <input type="number" name="ncm" placeholder="   NCM (ID)" required>
                        </label>

                    </div>  <!--coluna um -->
                
                    <div class="colunaDois">                    
                        <label class="label-input" for="">
                            <input type="number" name="estmin" placeholder="   Estoque mínimo" required> 
                        </label>
                        
                        <label class="label-input" for="">
                            <input type="number" name="estmax" placeholder="   Estoque máximo" required> 
                        </label>

                        <label class="label-input" for="">
                            <input type="number" name="estideal" placeholder="   Estoque ideal" required> 
                        </label>

                        <label class="label-input" for="">
                            <input type="text" name="valor" placeholder="   Valor de custo" required>
                        </label>

                        
                        <label class="label-input" for="">
                            <input type="file" name="img" placeholder="   Imagem do produto" required>
                        </label>

                        
                        <label class="label-input" for="">
                            <input type="text" name="obs" placeholder="   Observação" required>
                        </label>
                    </div>  <!--coluna dois-->
                </div><!--coluna row-->
                
                <div class="lado">
                    <button class="btn btn-dois">Cadastrar produto</button>
                </div>
            </form>
        </div>  <!--tela um-->
    </div><!--container-->

</body>
</html>