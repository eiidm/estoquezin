<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./aquisicao.css">
    <link rel="stylesheet" href="./menu.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <title>Entrada do Item</title>
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
                    <li><a class='menu_item' href='../consulta_produtos/consulta_produtos_front.php'>Consulta</a></li>

                <li><a class='menu_topico'>Item</a></li>
                    <li><a class='menu_item' href='./cadastro_item_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='./entrada_front.php'>Entrada</a></li>
                    <li><a class='menu_item' href='./saida_front.php'>Saída</a></li>
                    <li><a class='menu_item' href='./relatorio_front.php'>Relatório de entrada</a></li>

                <li><a class='menu_topico'>Fornecedores</a></li>
                    <li><a class='menu_item' href="./cadastro_fornecedor_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_fornecedor/alterar_fornecedores_front.php'>Alteração/Exclusão</a></li>
            </ul>
    </div>

    
   <?php
        /*include ("../utils/conexao.php"); 

        $sql= $conecta->query("SELECT * FROM nometabelafornecedor");
        $qtd= $sql->num_rows; */
   ?>
    <div class="container">
        <br> <br> 
        <h2 class="texto texto-um">Entrada do item</h2><br> 
        <div class="tela Um">
            <form class="form" action="./entrada_back.php" method="post">     
                <div class="colunaDois"> 

                    <label class="label-input" for="">
                        <input type="text" name="docfiscal" placeholder=" Documento Fiscal" required>
                    </label>

                    <select id="fornecedor" name="fornecedor" required>
                        <option value="">Selecione um fornecedor</option>
                        <?php
                            include ("../utils/conexao.php"); 
                            $sql = $conecta->query("SELECT * FROM nometabelafornecedor");
                            while ($row = $sql->fetch_object()) 
                            {
                                echo "<option value='{$row->id_fornecedor}'>{$row->nomefornecedor}</option>";
                            }
                            mysqli_close($conecta); 
                        ?>
                    </select>                       

                    <label class="label-input" for="">
                        <input type="date" name="data" placeholder=" Data de aquisição" required> 
                    </label>

                    <select id="produto" name="produto" required>
                        <option value="">Selecione um produto</option>
                        <?php
                           include ("../utils/conexao.php"); 
                            $sql = $conecta->query("SELECT * FROM material");
                            while ($row = $sql->fetch_object()) 
                            {
                                echo "<option value='{$row->id}'>{$row->nomematerial}</option>";
                            }
                            mysqli_close($conecta); 
                        ?>
                    </select>  

                    <label class="label-input" for="">
                        <input type="number" name="valor_un" placeholder=" Valor unitário" required> 
                    </label>
                    
                    <label class="label-input" for="">
                        <input type="number" name="qtde" placeholder=" Quantidade" required> 
                    </label>
                    
                    <label class="label-input" for="">
                        <input type="text" name="valor_total" placeholder=" Valor total(Gerado Automaticamente)" > 
                    </label>    

                    <button class="btn btn-dois">Realizar Entrada</button>
                </div>  <!--coluna dois-->
            </form>   
        </div>  <!--tela um-->
    </div><!--container-->
</body>
</html>