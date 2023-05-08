<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../login_empresa/login_empresa.css">
    <link rel="stylesheet" href="./menu.css">
    <!--<link rel="shortcut icon" href="../imagens/logo.png">-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="validadorsenha/validadorsenha.js"></script>
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <title>Cadastro de Empresas</title>
</head>

<body>
    <div class='cabecalho'>
        <input id='menu_to' type='checkbox' />
        <label class='menu_btn' for='menu_to'>
            <span></span>
        </label>
            <ul class='menu_box'>
                <li><a class='menu_item' href=''>Home</a></li>
                <li><a class='menu_item' href='../login_colaborador/login_colaborador_front.php'>Colaborador</a></li>

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
                    <li><a class='menu_item' href=''>Cadastro</a></li>
                    <li><a class='menu_item' href=''>Alteração</a></li>
                    <li><a class='menu_item' href=''>Exclusão</a></li>
            </ul>
        </div>

    <div class='home'>
        <img scr=''>
    </div> <!-- ------ MENU ------ -->


    <div class="container">
        <div class="tela Um">
            <div class="colunaUm">
                <h2 class="texto texto-um">Seja bem-vindo!</h2>
                <p class="descricao">Crie a conta da sua empresa</p>
                <p class="descricao">Insira os dados ao lado</p>
                <a href="login_empresa_front.php"><button class="btn btn-um">Entrar</button></a>
            </div>  <!--coluna um -->
            
        <div class="colunaDois">
            <h2 class="texto texto-dois">Crie sua conta!</h2>
            <form class="form" action="../login_empresa/cadastro_empresa_back.php" method="post">                    
                <label class="label-input" for="">
                    <i class="fa-solid fa-user icon"></i>
                    <input type="text" name="razaosocial" placeholder="Razão Social" required>
                </label>

                <label class="label-input" for="">
                    <i class="fa-solid fa-envelope icon"></i>
                    <input type="email" name="email" placeholder="E-mail" required> 
                </label>

                <label class="label-input" for="">
                    <i class="fa-solid fa-id-card icon"></i>
                    <input type="text" name="cnpj" id="cnpj" maxlength="18" placeholder="CNPJ" required>
                </label>

                <label class="label-input" for="">
                    <i class="fa-solid fa-house" style="color: #606771;"></i>
                    <input type="text" name="endereco" placeholder=" Endereço" required> 
                </label>

                <label class="label-input" for="">
                    <i class="fa-solid fa-phone icon"></i>
                    <input type="text" name="telefone" id="telefone" maxlength="15" placeholder="Telefone" required>
                </label>

                <label class="label-input" for="">
                    <i class="fa-solid fa-lock icon"></i>
                    <input type="password" name="senha" placeholder="Senha" required>
                </label>

                <script src="mascara.js"></script>
                <button class="btn btn-dois">Cadastrar-se</button>
                </form>
            </div>  <!--coluna dois-->
        </div>  <!--tela um-->
    </div><!--container-->

</body>
</html>