<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../cadastro_produtos/cadastro_produtos.css">
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
                <li><a class='menu_item' href=''>Home</a></li>
                <li><a class='menu_item' href='./login_colaborador/login_colaborador_front.php'>Colaborador</a></li>

                <li><a class='menu_topico'>Grupos</a></li>
                    <li><a class='menu_item' href="./cadastro_grupo/cadastro_grupo_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href=''>Alteração</a></li>
                    <li><a class='menu_item' href=''>Exclusão</a></li>

                <li><a class='menu_topico'>Produtos</a></li>
                    <li><a class='menu_item' href='./cadastro_produtos/cadastro_produtos_front.php'>Cadastro</a></li>
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
            <div class="colunaDois">
            <h2 class="texto texto-um">Cadastro de Produtos</h2>

                <form class="form" action="../cadastro_produto/cadastro_produto_back.php" method="post">                    
                    <label class="label-input" for="">
                        <input type="text" name="nomematerial" placeholder="   Nome do material" required>
                    </label>

                    <label class="label-input" for="">
                        <input type="email" name="nomegrupo" placeholder="   Nome do grupo" required> 
                    </label>

                    <label class="label-input" for="">
                        <input type="number" name="unidade" placeholder="   Unidade" required> 
                    </label>

                    <label class="label-input" for="">
                        <input type="text" name="local" placeholder="   Local" required>
                    </label>

                    <label class="label-input" for="">
                        <input type="text" name="ncm" placeholder="   NCM (ID)" required>
                    </label>

                    <label class="label-input" for="">
                        <input type="text" name="obs" placeholder="   Observação" required>
                    </label>
                </form>
            </div>  <!--coluna um -->
            
        <div class="colunaDois">
            <form class="form" action="../cadastro_produto/cadastro_produto_back.php" method="post" enctype="multipart/form-data">                    
                <label class="label-input" for="">
                    <input type="number" name="estmax" placeholder="   Estoque máximo" required> 
                </label>
                
                <label class="label-input" for="">
                    <input type="number" name="estmin" placeholder="   Estoque mínimo" required> 
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
                
                <button class="btn btn-dois">Cadastrar produto</button>
            </form>
        </div>  <!--coluna dois-->
        </div>  <!--tela um-->
    </div><!--container-->

</body>
</html>