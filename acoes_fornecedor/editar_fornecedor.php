<?php
        include ("../utils/conexao.php"); 
       $sql= $conecta->query("SELECT * FROM nometabelafornecedor WHERE id_fornecedor=".$_REQUEST["id_fornecedor"]);
       $row = $sql->fetch_object();
    ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./form_altera.css">
    <link rel="stylesheet" href="./menu.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <title>Alterando Fornecedor</title>
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
                    <li><a class='menu_item' href=''>Pedido de compra</a></li>

                <li><a class='menu_topico'>Item</a></li>
                    <li><a class='menu_item' href='../item/cadastro_item_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../item/entrada_front.php'>Entrada</a></li>
                    <li><a class='menu_item' href='../item/saida_front.php'>Saída</a></li>
                    <li><a class='menu_item' href='../item/relatorio_front.php'>Relatório de entrada</a></li>

                <li><a class='menu_topico'>Fornecedores</a></li>
                    <li><a class='menu_item' href='../cadastro_fornecedor/cadastro_fornecedor_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='./alterar_fornecedores_front.php'>Alteração/Exclusão</a></li>
            </ul>
        </div>

    <div class='home'>
        <img scr=''>
    </div> <!-- ------ MENU ------ -->

       

    <div class="container">
        <h2 class="texto texto-um">Alteração de Fornecedor</h2>
        <div class="tela Um">
            <form class="form" action="./alterar_fornecedores_back.php" method="post">
                <div class="row">
                    <div class="colunaUm">    
                    <input type="text" name="id_fornecedor" value="<?php print $row->id_fornecedor; ?>" >   
                        <br>Nome do Fornecedor
                        <label class="label-input">
                            <input type="text" name="nomefornecedor" value="<?php print $row->nomefornecedor; ?>" >
                        </label>
        
                        <br>Razão Social
                        <label class="label-input">
                            <input type="text" name="razaosocial" value="<?php print $row->razaosocial; ?>" >
                        </label>

                        <br>Nome para Contato
                        <label class="label-input">
                            <input type="text" name="contato" value="<?php print $row->contato; ?>" >
                        </label>
                    </div><!--coluna um-->
        
                    <div class="colunaDois">
                        <br>CNPJ
                        <label class="label-input">
                            <input type="text" name="cnpj" value="<?php print $row->cnpj; ?>" >
                        </label>

                        <br>Inscrição Estadual
                        <label class="label-input">
                            <input type="number" name="inscricao" value="<?php print $row->inscricao; ?>" >
                        </label>

                        <br>Telefone
                        <label class="label-input">
                            <input type="tel" name="number" value="<?php print $row->number; ?>" >
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