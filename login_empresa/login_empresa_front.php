<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../login_empresa/login_empresa.css">
    <link rel="stylesheet" href="./menu.css">
    <!--<link rel="shortcut icon" href="../imagens/logo.png">-->
    <title>Login de Empresas</title>
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
                    <li><a class='menu_item' href='../cadastro_fornecedor/cadastro_fornecedor_front.php'>Cadastro</a></li>
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
                <h2 class="texto texto-um">Organize seu estoque conosco!</h2>
                <p class="descricao">Insira os dados da empresa ao lado</p>
                <a href="cadastro_empresa_front.php"><button class="btn btn-um">Cadastrar Empresa</button></a>
            </div>  <!--coluna usa um -->
            
            <div class="colunaDois">
            <h2 class="texto texto-dois">Organize seu estoque aqui</h2>
                <form class="form" action="login_empresa_back.php" method="post">
                    <label class="label-input" for="">
                        <i class="fa-solid fa-id-card icon"></i>
                        <input type="text" name="cnpj" id="cnpj" maxlength="18" placeholder="CNPJ" required>
                    </label>
            
                    <label class="label-input" for="">
                        <i class="fa-solid fa-lock icon"></i>
                        <input type="password" name="senha" placeholder="Senha" required>
                    </label>

                    <button type = "submit" class="btn btn-dois">Entrar</button>
                </form>
            </div>  <!--coluna dois-->
        </div><!--tela um-->
    </div>  <!--container-->
    
</body>
</html>