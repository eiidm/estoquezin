<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./cadastro_fornecedor.css">
    <link rel="stylesheet" href="./menu.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
                    <li><a class='menu_item' href='../cadastro_produtos/cadastro_produtos_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_produtos/alterar_produtos_front.php'>Alteração</a></li>
                    <li><a class='menu_item' href='../acoes_produtos/excluir_produtos_front.php'>Exclusão</a></li>
                    <li><a class='menu_item' href='../consulta_produtos/consulta_produtos_front.php'>Consulta</a></li>
                    <li><a class='menu_item' href=''>Pedido de compra</a></li>

                <li><a class='menu_topico'>Fornecedores</a></li>
                    <li><a class='menu_item' href="./cadastro_fornecedor_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_fornecedor/alterar_fornecedores_front.php'>Alteração</a></li>
                    <li><a class='menu_item' href='../acoes_fornecedor/excluir_fornecedores_front.php'>Exclusão</a></li>
            </ul>
        </div>

    <div class='home'>
        <img scr=''>
    </div> <!-- ------ MENU ------ -->

    <div class="container">
        <h2 class="texto texto-um">Cadastro de Fornecedores</h2><br>
        <div class="tela Um">
            <form class="form" action="./cadastro_fornecedor_back.php" method="post">     
                <div class="colunaDois">       
                    <label class="label-input" for="">
                        <input type="text" name="nomefornecedor" placeholder="   Nome do fornecedor" required>
                    </label>

                    <label class="label-input" for="">
                        <input type="text" name="razaosocial" placeholder="   Razão Social" required> 
                    </label>

                    <label class="label-input" for="">
                        <input type="text" name="contato" placeholder="   Nome para contato" required> 
                    </label>
                
                    <label class="label-input" for="">
                        <input type="text" name="cnpj" id="cnpj" maxlength="18" placeholder="   CNPJ" required>
                    </label>

                    <label class="label-input" for="">
                        <input type="text" name="inscricao" id="inscricao" maxlength="15" placeholder="   Inscrição Estadual" required>
                    </label>
                        
                    <label class="label-input" for="">
                        <input type="text" id="phone" name="phone" maxlength="14" placeholder="   Telefone" required>
                    </label>
                    
                    <button class="btn btn-dois">Cadastrar fornecedor</button>
                </div>  <!--coluna dois-->
            </form>   
            
            <script> //mascara de dados cnpj
                document.getElementById('cnpj').addEventListener('input', function (e) 
                {
                    let value = e.target.value;
                    value = value.replace(/\D/g, ''); // Remove caracteres não numéricos
                    value = value.replace(/^(\d{2})(\d)/, '$1.$2');
                    value = value.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
                    value = value.replace(/\.(\d{3})(\d)/, '.$1/$2');
                    value = value.replace(/(\d{4})(\d)/, '$1-$2');
                    e.target.value = value;
                });
            </script>

            <script> //mascara de dados telefone
                document.getElementById('phone').addEventListener('input', function (e) 
                {
                    let value = e.target.value;
                    value = value.replace(/\D/g, ''); // Remove caracteres não numéricos
                    value = value.replace(/^(\d{2})(\d)/g, '($1) $2');
                    value = value.replace(/(\d{4})(\d)/, '$1-$2');
                    e.target.value = value;
                });
            </script>

            <script>
                document.getElementById('inscricao').addEventListener('input', function (e) 
                {
                    let value = e.target.value;
                    value = value.replace(/\D/g, ''); // Remove caracteres não numéricos
                    value = value.replace(/^(\d{3})(\d)/g, '$1.$2');
                    value = value.replace(/^(\d{3})\.(\d{3})(\d)/g, '$1.$2.$3');
                    value = value.replace(/^(\d{3})\.(\d{3})\.(\d{3})(\d)/g, '$1.$2.$3.$4');
                    e.target.value = value;
                });
            </script>
        </div>  <!--tela um-->
    </div><!--container-->

</body>
</html>