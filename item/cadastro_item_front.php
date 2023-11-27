<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./cadastro_item.css">
    <link rel="stylesheet" href="./menu.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <title>Saída do Item</title>
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
                    <li><a class='menu_item' href='../acoes_empresa/alterar_empresas_front.php'>Alteração/Exclusão</a></li>

                <li><a class='menu_topico'>Grupos</a></li>
                    <li><a class='menu_item' href="../cadastro_grupo/cadastro_grupo_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_grupo/alterar_grupos_front.php'>Alteração/Exclusão</a></li>

                <li><a class='menu_topico'>Produtos</a></li>
                    <li><a class='menu_item' href='../cadastro_produtos/cadastro_produtos_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_produtos/alterar_produtos_front.php'>Alteração/Exclusão</a></li>

                <li><a class='menu_topico'>Item</a></li>
                    <li><a class='menu_item' href='./cadastro_item_front.php'>Saída</a></li>
                    <li><a class='menu_item' href='./entrada_front.php'>Entrada</a></li>
                    <li><a class='menu_item' href='./saida_front.php'>Relatório de saída</a></li>
                    <li><a class='menu_item' href='./relatorio_front.php'>Relatório de entrada</a></li>

                <li><a class='menu_topico'>Fornecedores</a></li>
                <li><a class='menu_item' href="../cadastro_fornecedor/cadastro_fornecedor_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_fornecedor/alterar_fornecedores_front.php'>Alteração/Exclusão</a></li>
            </ul>
        </div>

    <div class="container">
        <br> <br> 
        <h2 class="texto texto-um">Saída do item</h2><br> 
        <div class="tela Um">
            <form class="form" action="./cadastro_item_back.php" method="post">  
                <div class="row">   
                    <div class="colunaUm">
                        <label class="label-input" for="">
                            <input type="text" name="nomeitem" placeholder=" Nome do item" required>
                        </label>
                        
                        <label class="label-input" for="">
                            <input type="text" name="docfiscal" placeholder=" Documento Fiscal" required>
                        </label>

                        
                        <label class="label-input" for="">
                            <input type="text" name="codigo" placeholder=" Código do item" required>
                        </label>

                        <label class="label-input" for="">
                            <input type="text" name="descricao" placeholder=" Descrição do item" required>
                        </label>
                    </div>
                    <div class="colunaDois">

                        <label class="label-input" for="">
                            <input type="text" name="valoraquisicao" placeholder=" Valor Aquisição" required>
                        </label>

                        <label class="label-input" for="">
                            <input type="text" name="valorvenda" placeholder=" Valor de venda" required> 
                        </label>

                        <label class="label-input" for="">
                            <input type="number" name="qtde_estoque" placeholder=" Quantidade Estoque" required> 
                        </label>

                        <label class="label-input" for="">
                            <input type="number" name="qtde_vendida" placeholder=" Quantidade Vendida" required> 
                        </label>
                    </div>

                    <!--<label class="label-input" for="">
                        <input type="number" name="saldoitem" placeholder="Saldo item" required> 
                    </label>-->
                </div>
                    <button class="btn btn-dois">Realizar saída</button>
                 <!--coluna dois-->
                
            </form>   
        </div>  <!--tela um-->
    </div><!--container-->

</body>
</html>