<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./cadastro_fornecedor.css">
    <link rel="stylesheet" href="./menu.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <title>Cadastro de Fornecedores</title>
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
                    <li><a class='menu_item' href=''>Alteração</a></li>
                    <li><a class='menu_item' href=''>Exclusão</a></li>
                    <li><a class='menu_item' href=''>Consulta</a></li>
                    <li><a class='menu_item' href=''>Pedido de compra</a></li>

                <li><a class='menu_topico'>Fornecedores</a></li>
                    <li><a class='menu_item' href="./cadastro_fornecedor_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href=''>Alteração</a></li>
                    <li><a class='menu_item' href=''>Exclusão</a></li>
            </ul>
        </div>

    <div class='home'>
        <img scr=''>
    </div> <!-- ------ MENU ------ -->

    <div class="container">
   
        <div class="tela Um">
            <div class="colunaDois">
            <h2 class="texto texto-um">Cadastro de Fornecedores</h2><br>

                <form class="form" action="../cadastro_fornecedor/cadastro_fornecedor_back.php" method="post">                    
                    <label class="label-input" for="">
                        <input type="text" name="nomefornecedor" placeholder="   Nome do fornecedor" required>
                    </label>

                    <label class="label-input" for="">
                        <input type="text" name="razaosocial" placeholder="   Razão Social" required> 
                    </label>

                    <label class="label-input" for="">
                        <input type="text" name="contato" placeholder="   Nome para contato" required> 
                    </label>

                </form>
            </div>  <!--coluna um -->
            
        <div class="colunaDois">
            <form class="form" action="../cadastro_fornecedor/cadastro_forncedor_back.php" method="post">                    
                
                    <label class="label-input" for="">
                        <input type="text" name="cnpj" id="cnpj" maxlength="18" placeholder="   CNPJ" required>
                    </label>

                    <label class="label-input" for="">
                        <input type="number" name="inscricao" placeholder="     Inscrição Estadual" required>
                    </label>
                    
                    <label class="label-input" for="">
                        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="   Telefone" required>
                    </label>
                
                <button class="btn btn-dois">Cadastrar fornecedor</button>
            </form>
        </div>  <!--coluna dois-->
        </div>  <!--tela um-->
    </div><!--container-->

</body>
</html>