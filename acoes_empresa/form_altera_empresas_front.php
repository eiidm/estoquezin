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
                <li><a class='menu_item' href=''>Home</a></li>
                <li><a class='menu_item' href="../login_colaborador/login_colaborador_front.php">Colaborador</a></li>

                <li><a class='menu_topico'>Empresas</a></li>
                    <li><a class='menu_item' href='../login_empresa/cadastro_empresa_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='./alterar_empresas_front.php'>Alteração</a></li>
                    <li><a class='menu_item' href='./excluir_empresas_front.php'>Exclusão</a></li>

                <li><a class='menu_topico'>Grupos</a></li>
                    <li><a class='menu_item' href="../cadastro_grupo/cadastro_grupo_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href=''>Alteração</a></li>
                    <li><a class='menu_item' href=''>Exclusão</a></li>

                <li><a class='menu_topico'>Produtos</a></li>
                    <li><a class='menu_item' href='../cadastro_produtos/cadastro_produtos_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_produtos/alterar_produtos_front.php'>Alteração</a></li>
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
       $cnpj = $_GET["cnpj"];
       include "cad_getinfo_empresas_back.php"; 
    ?>   

    <div class="container">
        <h2 class="texto texto-um">Alteração de Empresa</h2>
        <div class="tela Um">
            <form class="form" action="./alterar_empresas_back.php" method="post">
                <div class="row">
                    <div class="colunaUm">       
                        <br>Razão Social
                        <label class="label-input">
                            <input type="text" name="razaosocial" value="<?php echo $linha['razaosocial']; ?>" >
                        </label>
        
                        <br>E-mail
                        <label class="label-input">
                            <input type="text" name="email" value="<?php echo $linha['email']; ?>" >
                        </label>

                        <br>CNPJ
                        <label class="label-input">
                            <input type="text" name="cnpj" value="<?php echo $linha['cnpj']; ?>" >
                        </label>
                    </div><!--coluna um-->
        
                    <div class="colunaDois">
                        <br>Endereço
                        <label class="label-input">
                            <input type="text" name="endereco" value="<?php echo $linha['endereco']; ?>" >
                        </label>

                        <br>Telefone
                        <label class="label-input">
                            <input type="text" name="telefone" value="<?php echo $linha['telefone']; ?>" >
                        </label>

                        <br>Senha
                        <label class="label-input">
                            <input type="password" name="senha" value="<?php echo $linha['senha']; ?>" >
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