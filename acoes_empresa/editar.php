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
                    <li><a class='menu_item' href='../consulta_produtos/consulta_produtos_front.php'>Consulta</a></li>
                    <li><a class='menu_item' href=''>Pedido de compra</a></li>

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
       $sql= $conecta->query("SELECT * FROM nometabelaempresa WHERE id_empresa=".$_REQUEST["id_empresa"]);
       $row = $sql->fetch_object();
    ?> 
 

    <div class="container">
        <h2 class="texto texto-um">Alteração de Empresa</h2>
        <div class="tela Um">
            <form class="form" action="./alterar_empresas_back.php" method="post">
                <div class="row">
                    <div class="colunaUm">       
                    <input type="text" name="id_empresa" value="<?php print $row->id_empresa; ?>" >   
                        <br>Razao Social
                        <label class="label-input">
                            <input type="text" name="razaosocial" value="<?php print $row->razaosocial; ?>" >
                        </label>
        
                        <br>Email
                        <label class="label-input">
                            <input type="text" name="email" value="<?php print $row->email; ?>" >
                        </label>

                        <br>Cnpj
                        <label class="label-input">
                            <input type="text" name="cnpj" value="<?php print $row->cnpj; ?>" >
                        </label>
                    </div><!--coluna um-->
        
                    <div class="colunaDois">

                    <br>Endereço
                        <label class="label-input">
                            <input type="text" name="endereco" value="<?php print $row->endereco; ?>" >
                        </label>

                        <br>Telefone
                        <label class="label-input">
                            <input type="number" name="telefone" value="<?php print $row->telefone; ?>" >
                        </label>

                        <br>senha
                        <label class="label-input">
                            <input type="tel" name="senha" value="<?php print $row->senha; ?>" >
                        </label>

                        
                    </div><!--coluna dois-->
                </div><!--row-->

                <?php
                    mysqli_close($conecta);
                ?>
                
                <div class="lado">
                    <button class="btn btn-dois">Alterar</button>
                </div>
            </form>
        </div><!--tela um-->
    </div><!--container-->
</body>
</html>